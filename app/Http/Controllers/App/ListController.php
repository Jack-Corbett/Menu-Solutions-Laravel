<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Group;
use App\Helpers\Format;
use DB;

class ListController extends Controller
{
    public function index()
    {
        // Replace with method in Plan model
        $group = Group::find(auth()->user()->group_id);
        $plan = $group->plans()->latest()->find(1);

        $fruit_veg = array();
        $protein = array();
        $carbohydrates = array();
        $dairy = array();
        $other = array();

        if ($plan != null) {
            $ingredients = DB::table('plan_recipe')
                ->join('recipes', 'plan_recipe.recipe_id', '=', 'recipes.id')
                ->join('ingredient_recipe', 'ingredient_recipe.recipe_id', '=', 'recipes.id')
                ->join('ingredients', 'ingredients.id', '=', 'ingredient_recipe.ingredient_id')
                ->select(DB::raw('ingredients.category, ingredients.name, 
            SUM(plan_recipe.number_eating * ingredient_recipe.quantity) As amount, ingredients.measurement'))
                ->where('plan_id', $plan->id)
                ->groupBy('ingredients.name', 'ingredients.category', 'ingredients.measurement')
                ->orderBy('category', 'desc')
                ->get();

            foreach ($ingredients as $ingredient) {
                if ($ingredient->category == 1) array_push($fruit_veg, $ingredient);
                elseif ($ingredient->category == 2) array_push($protein, $ingredient);
                elseif ($ingredient->category == 3) array_push($carbohydrates, $ingredient);
                elseif ($ingredient->category == 4) array_push($dairy, $ingredient);
                elseif ($ingredient->category == 6) array_push($other, $ingredient);
            }

            $fruit_veg = Format::ingredients($fruit_veg);
            $protein = Format::ingredients($protein);
            $carbohydrates = Format::ingredients($carbohydrates);
            $dairy = Format::ingredients($dairy);
            $other = Format::ingredients($other);
        }

        return view('app.list.index', compact(['fruit_veg', 'protein', 'carbohydrates',
            'dairy', 'other']));
    }
}
