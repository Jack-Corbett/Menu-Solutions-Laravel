<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Recipe;
use App\Helpers\Format;
use DB;

class RecipeController extends Controller
{
    public function index()
    {
        return view("app.recipes.index");
    }

    public function show($id, $no_eating)
    {
        $recipe = Recipe::find($id);

        // Fix this to fetch for 1 person by default
        $ingredients = DB::table('recipes')
            ->join('ingredient_recipe', 'ingredient_recipe.recipe_id', '=', 'recipes.id')
            ->join('ingredients', 'ingredients.id', '=', 'ingredient_recipe.ingredient_id')
            ->select(DB::raw('ingredients.name, (' . $no_eating . ' * 
            ingredient_recipe.quantity) As amount, ingredients.measurement'))
            ->where('recipes.id', $id)
            ->groupBy('ingredients.name', 'amount', 'ingredients.measurement')
            ->orderBY('ingredients.name', 'desc')
            ->get();

        $ingredients_output = Format::ingredients($ingredients);

        return view("app.recipes.show", compact(['recipe', 'ingredients_output']));
    }
}
