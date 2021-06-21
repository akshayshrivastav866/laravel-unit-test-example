<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;

class EventsController extends BaseController
{

	public function getEventsWithWorkshops()
		{
			return 	[
							[
								"id" => 1, 
								"name" => "Laravel convention 2020", 
								"created_at" => "2021-04-25T09:32:27.000000Z", 
								"updated_at" => "2021-04-25T09:32:27.000000Z", 
								"workshops" => [
									[
										"id" => 1, 
										"start" => "2020-02-21 10:00:00", 
										"end" => "2020-02-21 16:00:00", 
										"event_id" => 1, 
										"name" => "Illuminate your knowledge of the laravel code base", 
										"created_at" => "2021-04-25T09:32:27.000000Z", 
										"updated_at" => "2021-04-25T09:32:27.000000Z" 
									] 
								] 
							], 
							[
								"id" => 2, 
								"name" => "Laravel convention 2021", 
								"created_at" => "2021-04-25T09:32:27.000000Z", 
								"updated_at" => "2021-04-25T09:32:27.000000Z", 
								"workshops" => [
									[
										"id" => 2, 
										"start" => "2021-10-21 10:00:00", 
										"end" => "2021-10-21 18:00:00", 
										"event_id" => 2, 
										"name" => "The new Eloquent - load more with less", 
										"created_at" => "2021-04-25T09:32:27.000000Z", 
										"updated_at" => "2021-04-25T09:32:27.000000Z" 
									], 
									[
											"id" => 3, 
											"start" => "2021-11-21 09:00:00", 
											"end" => "2021-11-21 17:00:00", 
											"event_id" => 2, 
											"name" => "AutoEx - handles exceptions 100% automatic", 
											"created_at" => "2021-04-25T09:32:27.000000Z", 
											"updated_at" => "2021-04-25T09:32:27.000000Z" 
										] 
								] 
							], 
							[
								"id" => 3, 
								"name" => "React convention 2021", 
								"created_at" => "2021-04-25T09:32:27.000000Z", 
								"updated_at" => "2021-04-25T09:32:27.000000Z", 
								"workshops" => [
									[
										"id" => 4, 
										"start" => "2021-08-21 10:00:00", 
										"end" => "2021-08-21 18:00:00", 
										"event_id" => 3, 
										"name" => "#NoClass pure functional programming", 
										"created_at" => "2021-04-25T09:32:27.000000Z", 
										"updated_at" => "2021-04-25T09:32:27.000000Z" 
									], 
									[
											"id" => 5, 
											"start" => "2021-08-21 09:00:00", 
											"end" => "2021-08-21 17:00:00", 
											"event_id" => 3, 
											"name" => "Navigating the function jungle", 
											"created_at" => "2021-04-25T09:32:27.000000Z", 
											"updated_at" => "2021-04-25T09:32:27.000000Z" 
										] 
								] 
							]
						];
		}

	public function getFutureEventsWithWorkshops() {
		return 	[
						[
							 "id" => 2, 
							 "name" => "Laravel convention 2021", 
							 "created_at" => "2021-04-20T07:01:14.000000Z", 
							 "updated_at" => "2021-04-20T07:01:14.000000Z", 
							 "workshops" => [
								[
								   "id" => 2, 
								   "start" => "2021-10-21 10:00:00", 
								   "end" => "2021-10-21 18:00:00", 
								   "event_id" => 2, 
								   "name" => "The new Eloquent - load more with less", 
								   "created_at" => "2021-04-20T07:01:14.000000Z", 
								   "updated_at" => "2021-04-20T07:01:14.000000Z" 
								], 
								[
									  "id" => 3, 
									  "start" => "2021-11-21 09:00:00", 
									  "end" => "2021-11-21 17:00:00", 
									  "event_id" => 2, 
									  "name" => "AutoEx - handles exceptions 100% automatic", 
									  "created_at" => "2021-04-20T07:01:14.000000Z", 
									  "updated_at" => "2021-04-20T07:01:14.000000Z" 
								   ] 
							 ] 
						], 
						[
							 "id" => 3, 
							 "name" => "React convention 2021", 
							 "created_at" => "2021-04-20T07:01:14.000000Z", 
							 "updated_at" => "2021-04-20T07:01:14.000000Z", 
							 "workshops" => [
								[
								   "id" => 4, 
								   "start" => "2021-08-21 10:00:00", 
								   "end" => "2021-08-21 18:00:00", 
								   "event_id" => 3, 
								   "name" => "#NoClass pure functional programming", 
								   "created_at" => "2021-04-20T07:01:14.000000Z", 
								   "updated_at" => "2021-04-20T07:01:14.000000Z" 
								], 
								[
									  "id" => 5, 
									  "start" => "2021-08-21 09:00:00", 
									  "end" => "2021-08-21 17:00:00", 
									  "event_id" => 3, 
									  "name" => "Navigating the function jungle", 
									  "created_at" => "2021-04-20T07:01:14.000000Z", 
									  "updated_at" => "2021-04-20T07:01:14.000000Z" 
								   ] 
							 ] 
						]
					];
	}
}
