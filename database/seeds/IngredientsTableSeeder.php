<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO ingredients (id, name, measurement, category) VALUES (1,'Coconut Oil','tbsp',6),(2,'Onion(s)','',1),(3,'Garlic','cloves',1),(4,'Tomato(es)','',1),(5,'Oregano','tbsp',6),(6,'Olive Oil','tsp',6),(7,'Minced Beef','g',2),(8,'Beef Stock','cube(s)',6),(9,'Tomato Puree','tbsp',6),(10,'Lasagne Sheet(s)','',3),(14,'Tomato Ketchup','tbsp',6),(15,'Brown Penne Pasta','g',3),(16,'Parmesan Cheese','',4),(17,'Chicken Breast(s)','',2),(18,'Margarine','g',4),(19,'Curry Powder','tsp',6),(20,'Caster Sugar','tsp',6),(21,'Mustard Powder','tsp',6),(22,'Plain Flour','g',3),(23,'Sweet Chutney','tbsp',6),(24,'Worcestershire Sauce','tbsp',6),(25,'Rice','g',3),(26,'Red Pepper(s)','',1),(27,'Spring Onion(s)','',1),(28,'Beansprout(s)','g',1),(29,'Noodles','g',3),(30,'Oyster Sauce','tbsp',6),(31,'Canned Chopped Tomatoes','g',1),(32,'Red Wine','ml',6),(34,'Fast Action Yeast','g',3),(35,'Extra-Virgin Olive Oil','tbsp',6),(38,'Cheddar Cheese','g',4),(39,'Pizza Toppings','',6),(40,'Water','ml',5),(41,'Soy Sauce','tbsp',6),(42,'Sesame Oil','tsp',6),(43,'Fresh ginger','tsp',1),(44,'Sirloin Steak','g',2),(45,'Sesame Seeds','tbsp',3),(46,'Carrot(s)','',1),(47,'Mangetout','g',1),(48,'Mushrooms','g',1),(49,'Hoisin Sauce','tbsp',6),(50,'Garlic Butter','g',6),(51,'Breadcrumbs','g',3),(52,'New Potato(es)','',3),(53,'Peas','g',1),(54,'Baby Corn','',1),(55,'Wholemeal Wrap','',3),(56,'Cooked Chicken','g',2),(57,'Roasted Red Pepper','',1),(58,'Spinach','handful(s)',1),(59,'Wholemeal Flatbread','',3),(60,'Yellow Pepper(s)','',1),(61,'Leafy Salad','',1),(62,'Ground Black Pepper','',6),(63,'Chilli Flakes','',1),(64,'Sour Cream','tbsp',6),(65,'Broccoli','',1),(66,'Honey','tsp',4),(67,'Chinese 5 Spices','tsp',6),(68,'Sweetcorn','g',1),(69,'Sweet Potato(es)','',3),(70,'Potato(es)','',3),(71,'Mixed Herbs','',6),(72,'Pork Chop(s)','',2),(73,'Apple Sauce','tbsp',6),(74,'Mustard','tsp',1),(75,'Milk','ml',4),(76,'Kidney Beans','g',2),(77,'Brown Rice','g',3),(78,'Baby Carrots','',1),(79,'Bacon Rasher(s)','',2),(80,'Cajun Spice','g',6),(81,'Granary Bread','Slice(s)',3),(82,'Haddock Fillet(s)','',2),(83,'Butter/Margarine','g',4),(84,'Turkey Mince','g',2),(85,'Yoghurt','tbsp',4),(86,'Cayenne Pepper','g',1),(87,'Paprika','g',6),(88,'Dried Parsley','tsp',1),(89,'Tabasco Sauce','tsp',6),(90,'Burger Bun(s)','',3)");
    }
}
