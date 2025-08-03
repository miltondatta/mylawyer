<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, SoftDeletes ,HasTranslations;
    protected $table = "posts";
    public $translatable = ['name','description'];
    protected $fillable = ['lawyer_id','law_firm_id', 'blog_category_id', 'is_featured', 'name', 'description', 'slug', 'sort_order', 'image', 'is_active', 'deleted_at'];


    public function scopeWithAll($query)
    {
        return $query->with('lawyer')->with('tags')->with('law_firm')->with('blog_category');
    }
    public function scopeHasModulePermissions($query){
        return $query->whereHas('lawyer',function($q){
            $q->whereHas('pricing_plan',function($y){{
                $y->whereHas('lawyer_modules',function($z){
                    $z->where('pricing_plan_modules.module_code','lawyer-podcasts');
                });
            }});
        })->orWhereHas('law_firm',function($q){
            $q->whereHas('pricing_plan',function($y){{
                $y->whereHas('law_firm_modules',function($z){
                    $z->where('pricing_plan_modules.module_code','law_firm-podcasts');
                });
            }});
        })->doesntHave('lawyer', 'or')->doesntHave('law_firm' , 'or');
    }
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
    public function lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }
    public function law_firm()
    {
        return $this->belongsTo(LawFirm::class);
    }
    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
