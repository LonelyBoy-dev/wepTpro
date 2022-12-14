<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Goutte\Client;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class AddPost_PortalSite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:create_Portal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new post in website:https://www.portal.ir';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->index();
    }

    public function index()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.portal.ir/blog');
        $crawler->filter('.row.gutter-3.gutter-md-5.gutter-xl-6')->each(function ($node) {
            $title = $node->filter('.card-title.h3.mb-2 a')->text();
            $slug = $this->make_slug($title);
            $post = Post::where('slug', $slug)->first();
            $link = 'https://www.portal.ir/' . $node->filter('.text-secondary')->attr("href");

            if (empty($post)) {

                $client = new Client();
                $inside_post = $client->request('GET', $link);
                $inside_post->each(function ($item) {
                    $meta_description=$item->filterXpath('//meta[@name="description"]')->attr('content');
                    $title = $item->filter('h1')->text();
                    $content = $item->filter('.blog-single-content')->html();
                    $image = 'https://www.portal.ir/' . $item->filter('.page-header img')->attr("src");
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
                    $post->slug = "$slug";
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


                    Post::where('id',$post->id)->update(['image'=>'uploads/Posts/post-id-'.$post->id.'/'.$name]);

                    $this->save_images();


                    file_put_contents($name, $image_stream);
                    if (!is_dir(public_path('uploads/Posts/post-id-' . $post->id))) {
                        mkdir(public_path('uploads/Posts/post-id-'. $post->id) );
                    }
                    rename($name, public_path('uploads/Posts/post-id-'. $post->id . '/' . $name) );
                    session()->forget('Tamneel-image');
                });

            }
        });
        $post = Post::latest()->first();
        if ($post->edit!="YES"){
            return redirect()->route('front.blog.show', ['blog' => $post]);
        }
    }


    public function save_images()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.portal.ir/blog');
        $link = 'https://www.portal.ir/' . $crawler->filter('.card-title a')->attr("href");

        $client = new Client();
        $inside_post = $client->request('GET', $link);

        $inside_post->filter('.justify-content-center .col-12.col-lg img')->each(function ($img) {

            $client = new Client();
            $crawler = $client->request('GET', 'https://www.portal.ir/blog');
            $title = $crawler->filter('.card-title.h3.mb-2 a')->text();

            $slug = $this->make_slug($title);
            $post = Post::where('slug', $slug)->first();

            $image = 'https://www.portal.ir/' . $img->attr("src");

            $image_stream = file_get_contents($image);
            $realName = substr($image, strrpos($image, '/') + 1);
            $name=explode('?',$realName);
            if (count($name)){
                $name=$name[0];
            }else{
                $name=$realName;
            }
            file_put_contents($name, $image_stream);
            if (!is_dir(public_path('uploads/Posts/post-id-'. $post->id) )) {
                mkdir(public_path('uploads/Posts/post-id-'. $post->id)) ;
            }
            rename($name, public_path('uploads/Posts/post-id-'. $post->id . '/' . $name) );

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
