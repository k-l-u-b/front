# DB Structure

![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/0503a47f-24bc-4f0d-8337-aa35b84d586c/club_map-db_structure.jpg](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/0503a47f-24bc-4f0d-8337-aa35b84d586c/club_map-db_structure.jpg)

# API Routes

main url : localhost:8000/api
no auth needed

## Routes Diagram

![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/f973107b-3549-401a-9f56-1cf1060ee7e1/club_map-api_routes.jpg](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/f973107b-3549-401a-9f56-1cf1060ee7e1/club_map-api_routes.jpg)

## users

**/GET /users**

Returns :

    {
    	[
    		{
    			"id" : 0,
    			"name" : "User's name",
    			"money" : 0,
    			"satisfaction" : 0,
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0,
    			"perceptions_id" : [0,0,0,0,0,0]
    		},
    		{
    			"id" : 0,
    			"name" : "User's name",
    			"money" : 0,
    			"satisfaction" : 0,
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0,
    			"perceptions_id" : [0,0,0,0,0,0]
    		}
    	]
    }

**/GET user/{id}**

Returns : 

    {
    	"name" : "User's name",
    	"money" : 0,
    	"satisfaction" : 0,
    	"bizarre_alluring" : 0,
    	"introvert_exuberant" : 0,
    	"perceptions" : [
    		{
    			"id" : 0,
    			"user_id" : 0,
    			"target_user_id" : 0
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0
    		},
    		{
    			"id": 0,
    			"user_id" : 0,
    			"target_user_id" : 0
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0
    		},
    	]
    }

**/GET user/{id}/perceptions**

Returns :

    {
    		{
    			"id" : 0,
    			"user_id" : 0,
    			"target_user_id" : 0
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0
    		},
    		{
    			"id": 0,
    			"user_id" : 0,
    			"target_user_id" : 0
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0
    		},
    }

**/GET user/{id}/perceptions/{id}** 

Return :

    {
    			"id": 0,
    			"user_id" : 0,
    			"target_user_id" : 0
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0
    }

**/POST /user**

Parameters :

    {
    	"name" : "User's name",
    	"money" : 0,
    	"satisfaction" : 0,
    	"bizarre_alluring" : 0,
    	"introvert_exuberant" : 0
    }

Returns : 

    {
    	"id" : 0,
    	"name" : "User's name",
    	"money" : 0,
    	"satisfaction" : 0,
    	"bizarre_alluring" : 0,
    	"introvert_exuberant" : 0,
    	"perceptions_id" : []
    }

**/POST /user/{id}/perception**

Parameters : 

    {
    			"target_user_id" : 0
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0
    }

Returns :

    {
    			"id": 0,
    			"user_id" : 0,
    			"target_user_id" : 0
    			"bizarre_alluring" : 0,
    			"introvert_exuberant" : 0
    }

**/POST /user/{id}/event**

Parameters :

- event_type : discuss/dance/drink/toilets
- target_id : is null if event_type is dance/drink/toilets

    {
    	"event_type": "discuss",
    	"target_id" : 0,
    	"timestamp" : 0000000000
    }

**/POST /user{id}/perception**

Parameters

    

**/PUT /user/{id}** 

Parameters

    {
    	"name" : "User's name",
    	"money" : 0,
    	"satisfaction" : 0,
    	"bizarre_alluring" : 0,
    	"introvert_exuberant" : 0,
    	"perceptions_id" : [0,0,0,0,0,0]
    }

Returns :

    {
    	"id" : 0,
    	"name" : "User's name",
    	"money" : 0,
    	"satisfaction" : 0,
    	"bizarre_alluring" : 0,
    	"introvert_exuberant" : 0,
    	"perceptions_id" : [0,0,0,0,0,0]
    }

**/DEL user/{id}**

Returns :

    {
    	"User {id} deleted"
    }

## perceptions

**/GET /perceptions**

Returns :

    [
    	{
    		"id": 0,
    		"user_id" : 0,
    		"target_user_id" : 0
    		"bizarre_alluring" : 0,
    		"introvert_exuberant" : 0
    	},
    	{
    		"id": 0,
    		"user_id" : 0,
    		"target_user_id" : 0
    		"bizarre_alluring" : 0,
    		"introvert_exuberant" : 0
    	},
    ]