<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Resources\API\ArchivesResource;
use App\Http\Resources\API\BroadcastsResource;
use App\Http\Resources\API\EventsResource;
use App\Http\Resources\API\LawFirmsResource;
use App\Http\Resources\API\LawyersResource;
use App\Http\Resources\API\PodcastsResource;
use App\Http\Resources\API\PostsResource;
use App\Http\Resources\API\TagsResource;
use App\Models\Archive;
use App\Models\Broadcast;
use App\Models\Event;
use App\Models\LawFirm;
use App\Models\Lawyer;
use App\Models\Post;
use App\Models\Podcast;
use App\Models\Tag;

class APIDetailController extends Controller
{
    public function __construct()
    {
    }

    public function blogDetail(Request $request,$slug)
    {
        $post = Post::withAll()->hasModulePermissions()->active()->where('slug',$slug)->first();
        if($post){
            $post = new PostsResource($post);
            $response = generateResponse($post,true,"Post Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Post Not Found",null,'collection');
        }
        return response()->json($response);
    }

    public function eventDetail(Request $request,$slug)
    {
        $event = Event::withAll()->hasModulePermissions()->active()->where('slug',$slug)->first();
        if($event){
            $event = new EventsResource($event);
            $response = generateResponse($event,true,"Event Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Event Not Found",null,'collection');
        }
        return response()->json($response);
    }

    public function archiveDetail(Request $request,$slug)
    {
        $archive = Archive::withAll()->hasModulePermissions()->active()->where('slug',$slug)->first();
        if($archive){
            $archive = new ArchivesResource($archive);
            $response = generateResponse($archive,true,"Archive Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Archive Not Found",null,'collection');
        }
        return response()->json($response);
    }

    public function BroadcastDetail(Request $request,$slug)
    {
        $broadcast = Broadcast::withAll()->hasModulePermissions()->active()->where('slug',$slug)->first();
        if($broadcast){
            $broadcast = new BroadcastsResource($broadcast);
            $response = generateResponse($broadcast,true,"Broadcast Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Broadcast Not Found",null,'collection');
        }
        return response()->json($response);
    }

    public function PodcastDetail(Request $request,$slug)
    {
        $podcast = Podcast::withAll()->hasModulePermissions()->active()->where('slug',$slug)->first();
        if($podcast){
            $podcast = new PodcastsResource($podcast);
            $response = generateResponse($podcast,true,"Podcast Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Podcast Not Found",null,'collection');
        }
        return response()->json($response);
    }

    public function TagDetail(Request $request,$slug)
    {
        $tag = Tag::withAll()->withChildrens()->active()->where('slug',$slug)->first();
        if($tag){
            $tag = new TagsResource($tag);
            $response = generateResponse($tag,true,"Tag Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Tag Not Found",null,'collection');
        }
        return response()->json($response);
    }

    public function lawyerDetail(Request $request)
    {
        $lawyer = Lawyer::withChildrens()->active()->approved()->withAll()->where('user_name',$request->user_name)->first();
        if($lawyer){
            $lawyer = new LawyersResource($lawyer);
            $response = generateResponse($lawyer,$lawyer ? true:false,"Lawyer Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Lawyer Not Found",null,'collection');
        }
        return response()->json($response);
    }


    public function lawFirmDetail(Request $request)
    {
        $law_firm = LawFirm::withChildrens()->active()->approved()->withAll()->where('user_name',$request->user_name)->first();
        if($law_firm){
            $law_firm = new LawFirmsResource($law_firm);
            $response = generateResponse($law_firm,$law_firm ? true:false,"Law Firm Fetched Successfully",null,'collection');
        }else{
            $response = generateResponse(null,false,"Law Firm Not Found",null,'collection');
        }
        return response()->json($response);
    }

}
