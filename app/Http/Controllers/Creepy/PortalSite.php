<?php

namespace App\Http\Controllers\Creepy;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PortalSite extends Controller
{
    public function index()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://learnsource.net/article/List?order=latest&categoryName=%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C+%D9%88%D8%A8');
        $title = $crawler->filter('.flex.flex-col a')->text();
        $slug = $this->make_slug($title);
        $image='https://learnsource.net'.$crawler->filter('.inline-block.h-40.w-full img')->attr("src");
        $post = Post::where('slug', $slug)->first();
        $link = 'https://learnsource.net' . $crawler->filter('.block.mt-2.tracking-tight.text-base.font-medium.text-gray-700.transition.duration-100')->attr("href");
        session()->put('Tamneel-image',$image);
        if (empty($post)) {

                $client = new Client();
                $inside_post = $client->request('GET', $link);
                $inside_post->each(function ($item) {
                    $meta_description=$item->filterXpath('//meta[@name="description"]')->attr('content');
                   $meta_description=htmlentities($meta_description, ENT_QUOTES, "UTF-8");
                    $title = $item->filter('h1')->text();
                    $content = $item->filter('.col-md-9.col-12.pr-lg-4.pl-lg-0.d-xl-0 .text-right')->html();
                    $image = session('Tamneel-image');
                    $slug = $this->make_slug($title);

                    $image_stream = file_get_contents($image);
                    $realName = substr($image, strrpos($image, '/') + 1);
                    $name=explode('?',$realName);
                    if (count($name)){
                        $name=$name[0];
                    }else{
                        $name=$realName;
                    }

                    $post = new Post();
                    $post->title = $title;
                    $post->slug = $slug;
                    $post->admin_id = '1';
                    $post->published = '1';
                    $post->image = $image;
                    $post->content = $content;
                    $post->meta_title = $title;
                    $post->meta_description = $meta_description;
                    $post->save();

                    $category_id=Category::where('slug',"??????-????????????")->first();
                    $category=PostCategory::where(['post_id'=>$post->id,'category_id'=>$category_id->id])->first();

                    if (!$category){
                        $category=new PostCategory();
                        $category->post_id=$post->id;
                        $category->category_id=$category_id->id;
                        $category->save();
                    }

                    $category_id=Category::where('slug',"??????????-????")->first();
                    $category=PostCategory::where(['post_id'=>$post->id,'category_id'=>$category_id->id])->first();

                    if (!$category){
                        $category=new PostCategory();
                        $category->post_id=$post->id;
                        $category->category_id=$category_id->id;
                        $category->save();
                    }

                    Post::where('id',$post->id)->update(['image'=>'uploads/Posts/post-id-'.$post->id.'/'.$name]);

                    $this->save_images();


                    file_put_contents($name, $image_stream);
                    if (!is_dir('uploads')) {
                        mkdir("uploads");
                    }
                    if (!is_dir('uploads/Posts')) {
                        mkdir("uploads/Posts");
                    }
                    if (!is_dir('uploads/Posts/post-id-' . $post->id)) {
                        mkdir("uploads/Posts/post-id-" . $post->id);
                    }
                    rename($name, "uploads/Posts/post-id-" . $post->id . '/' . $name);
                    session()->forget('Tamneel-image');
                });

            }


        $post = Post::latest()->first();
        if ($post->edit!="YES"){
            return redirect()->route('front.blog.show', ['blog' => $post]);
        }

    }

    public function save_images()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.kiantc.com/articles');
        $link =  $crawler->filter('.card-title.font-weight-bold a')->attr("href");

        $client = new Client();
        $inside_post = $client->request('GET', $link);

        $inside_post->filter('.col-md-9.col-12.pr-lg-4.pl-lg-0.d-xl-0 .text-right img')->each(function ($img) {

            $client = new Client();
            $crawler = $client->request('GET', 'https://www.kiantc.com/articles');
            $title = $crawler->filter('.card-title.font-weight-bold a')->text();

            $slug = $this->make_slug($title);
            $post = Post::where('slug', $slug)->first();

            $image = 'https://www.kiantc.com/' . $img->attr("src");
            $image_stream = file_get_contents($image);
            $realName = substr($image, strrpos($image, '/') + 1);
            $name=explode('?',$realName);
            if (count($name)){
                $name=$name[0];
            }else{
                $name=$realName;
            }
            file_put_contents($name, $image_stream);
            if (!is_dir('uploads')) {
                mkdir("uploads");
            }
            if (!is_dir('uploads/Posts')) {
                mkdir("uploads/Posts");
            }
            if (!is_dir('uploads/Posts/post-id-' . $post->id)) {
                mkdir("uploads/Posts/post-id-" . $post->id);
            }
            rename($name, "uploads/Posts/post-id-" . $post->id . '/' . $name);

        });

    }

    public function editPost(Request $request)
    {
        $post=Post::find($request->id);
        $post->content=$request->input('content');
        $post->edit="YES";
        $post->save();
    }

    public function make_slug($string, $separator = '-') {
        $_transliteration = ["/??|??/" => "e",
            "/??/" => "e",
            "/??/" => "e",
            "/??/" => "e",
            "/??/" => "e",
            "/??|??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??|??|??/" => "",
            "/??|??|??|??|??/" => "",
            "/??|??|??/" => "",
            "/??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??|??/" => "",
            "/??|??|??|??/" => "",
            "/??|??/" => "",
            "/??|??/" => "",
            "/??|??|??|??|??|??| ??|??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??|??/" => "",
            "/??/" => "",
            "/??/" => "",
            "/??/" => "",
            "/??/" => "",
            "/??|??|??|??|??/" => "",
            "/??|??|??|??|??/" => "",
            "/??|??|??|??/" => "",
            "/??|??|??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??/" => "",
            "/??|??|??/" => "",
            "/??|??|??|??|??/" => "",
            "/??|??|??|??|??|??/" => "",
            "/??|??|??|??/" => "",
            "/??|??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??|??|??|??|??|??|??|??|??|??|??|??|??/" => "",
            "/??|??|??/" => "",
            "/??|??|??/" => "",
            "/??/" => "",
            "/??/" => "",
            "/??|??|??/" => "",
            "/??|??|??/" => "",
            "/??|??/" => "E",
            "/??/" => "s",
            "/??/" => "J",
            "/??/" => "j",
            "/??/" => "E",
            "/??/" => ""];
        $quotedReplacement = preg_quote($separator, '/');
        $merge = [
            '/[^\s\p{Zs}\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/[\s\p{Zs}]+/mu' => $separator,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
        ];
        $map = $_transliteration + $merge;
        unset($_transliteration);
        return preg_replace(array_keys($map), array_values($map), $string);
    }
}
