<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
	{

		public function getMenuItems() {
			return  [
							[
						         "id" => 1, 
						         "name" => "All events", 
						         "url" => "/events", 
						         "parent_id" => null, 
						         "created_at" => "2021-04-27T15:35:15.000000Z", 
						         "updated_at" => "2021-04-27T15:35:15.000000Z", 
						         "children" => [
											            [
											               "id" => 2, 
											               "name" => "Laracon", 
											               "url" => "/events/laracon", 
											               "parent_id" => 1, 
											               "created_at" => "2021-04-27T15:35:15.000000Z", 
											               "updated_at" => "2021-04-27T15:35:15.000000Z", 
											               "children" => [
											                  [
											                     "id" => 3, 
											                     "name" => "Illuminate your knowledge of the laravel code base", 
											                     "url" => "/events/laracon/workshops/illuminate", 
											                     "parent_id" => 2, 
											                     "created_at" => "2021-04-27T15:35:15.000000Z", 
											                     "updated_at" => "2021-04-27T15:35:15.000000Z", 
											                     "children" => [
											                     ] 
											                  ], 
											                  [
											                           "id" => 4, 
											                           "name" => "The new Eloquent - load more with less", 
											                           "url" => "/events/laracon/workshops/eloquent", 
											                           "parent_id" => 2, 
											                           "created_at" => "2021-04-27T15:35:15.000000Z", 
											                           "updated_at" => "2021-04-27T15:35:15.000000Z", 
											                           "children" => [
											                           ] 
											                        ] 
											               ] 
											            ], 
											            [
											                 "id" => 5, 
											                 "name" => "Reactcon", 
											                 "url" => "/events/reactcon", 
											                 "parent_id" => 1, 
											                 "created_at" => "2021-04-27T15:35:15.000000Z", 
											                 "updated_at" => "2021-04-27T15:35:15.000000Z", 
											                 "children" => [
											                    [
											                       "id" => 6, 
											                       "name" => "#NoClass pure functional programming", 
											                       "url" => "/events/reactcon/workshops/noclass", 
											                       "parent_id" => 5, 
											                       "created_at" => "2021-04-27T15:35:15.000000Z", 
											                       "updated_at" => "2021-04-27T15:35:15.000000Z", 
											                       "children" => [
											                       ] 
											                    ], 
											                    [
											                             "id" => 7, 
											                             "name" => "Navigating the function jungle", 
											                             "url" => "/events/reactcon/workshops/jungle", 
											                             "parent_id" => 5, 
											                             "created_at" => "2021-04-27T15:35:15.000000Z", 
											                             "updated_at" => "2021-04-27T15:35:15.000000Z", 
											                             "children" => [
											                             ] 
											                          ] 
											                 ] 
														]
													]
      						]
						];
		}
	}
