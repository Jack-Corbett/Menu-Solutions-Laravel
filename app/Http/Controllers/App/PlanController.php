<?php

namespace App\Http\Controllers\App;

use Carbon\Carbon;
use App\Group;
use App\Recipe;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    public function index()
    {
        $members = Group::members()->get();
        return view('app.plan.index', compact('members'));
    }

    public function store()
    {
        $group = Group::find(auth()->user()->group_id);

        // Array to store the recipe id's selected so far this week
        $thisPlanRecipeIDs = array();
        $lastPlanRecipeIDs = array();

        // Fetch the last plans
        $lastPlan = $group->plans()->latest()->find(1);
        if ($lastPlan != null) {
            $lastPlanRecipes = $lastPlan->recipes()->get();

            // Store just the recipe IDs
            foreach ($lastPlanRecipes as $oldRecipe) {
                array_push($lastPlanRecipeIDs, $oldRecipe->id);
            }
        }

        // Set the start and the end of the meal plan
        $start = new Carbon('next Monday');
        $end = (clone $start)->addWeek();

        // Create the new plan
        $plan = $group->plans()->create([
            'start_date' => $start,
            'end_date' => $end->subDay()
        ]);

        $recipe = null;

        for ($date = $start; $date->lt($end); $date->addDay()) {
            //Loop to pick a new recipe each time provided accept is still false
            while (true) {
                unset($recipe);

                // Fetch a random recipe
                $recipe = Recipe::inRandomOrder()->first();

                // Check there is enough time to cook the recipe
                if (request($date->dayOfWeekIso . 'time') < $recipe->time) continue;

                // Check if the recipe matches a recipe used in the previous plan
                if (!empty($lastPlanRecipesIDs)) {
                    if (in_array($recipe->id, $lastPlanRecipeIDs)) continue;
                }

                // Check the recipe has not already been selected for that week
                if (in_array($recipe->id, $thisPlanRecipeIDs)) continue;

                break;
            }

            array_push($thisPlanRecipeIDs, $recipe->id);

            $number_eating = count(request($date->dayOfWeekIso));

            $plan->recipes()->attach($recipe->id, ['date' => $date,
                'number_eating' => $number_eating]);
        }

        return redirect()->route('dashboard.calendar.index');
    }
}
