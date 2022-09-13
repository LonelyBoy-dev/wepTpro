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
        $crawler = $client->request('GET', 'https://iracode.com/articles/web-design');
        $crawler->filter('.elementor-widget-container .elementor-post.elementor-grid-item')->each(function ($node) {
            $title = $node->filter('.elementor-post__title a')->text();
            $slug = $this->make_slug($title);
            $image=$node->filter('.elementor-post__thumbnail img')->attr("src");
            $post = Post::where('slug', $slug)->first();
            $link =  $node->filter('.elementor-post__thumbnail__link')->attr("href");
            dd('title= '.$title.'   slug= '.$slug.'   image= '.$image.'   link= '.$link);
            session()->put('Tamneel-image',$image);
            if (empty($post)) {

                $client = new Client();
                $inside_post = $client->request('GET', $link);
                $inside_post->each(function ($item) {

                    $title = $item->filter('h1')->text();
                    $content = $item->filter('.myContent')->html();
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
                    $post->save();

                    $category_id=Category::where('slug',"همه-مقالات")->first();
                    $category=PostCategory::where(['post_id'=>$post->id,'category_id'=>$category_id->id])->first();

                    if (!$category){
                        $category=new PostCategory();
                        $category->post_id=$post->id;
                        $category->category_id=$category_id->id;
                        $category->save();
                    }

                    $category_id=Category::where('slug',"طراحی-وب")->first();
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

        });
        $post = Post::latest()->first();
        if ($post->edit!="YES"){
            return redirect()->route('front.blogs.show', ['blog' => $post]);
        }

    }

    public function save_images()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://learnsource.net/article/List?order=latest&categoryName=%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84');
        $link = 'https://learnsource.net' . $crawler->filter('.block.mt-2.tracking-tight.text-base.font-medium.text-gray-700.transition.duration-100')->attr("href");

        $client = new Client();
        $inside_post = $client->request('GET', $link);

        $inside_post->filter('.myContent img')->each(function ($img) {

            $client = new Client();
            $crawler = $client->request('GET', 'https://learnsource.net/article/List?order=latest&categoryName=%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84');
            $title = $crawler->filter('.flex.flex-col a')->text();

            $slug = $this->make_slug($title);
            $post = Post::where('slug', $slug)->first();

            $image = 'https://learnsource.net' . $img->attr("src");

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
        $_transliteration = ["/ö|œ/" => "e",
            "/ü/" => "e",
            "/Ä/" => "e",
            "/Ü/" => "e",
            "/Ö/" => "e",
            "/À|Á|Â|Ã|Å|Ǻ|Ā|Ă|Ą|Ǎ/" => "",
            "/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/" => "",
            "/Ç|Ć|Ĉ|Ċ|Č/" => "",
            "/ç|ć|ĉ|ċ|č/" => "",
            "/Ð|Ď|Đ/" => "",
            "/ð|ď|đ/" => "",
            "/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/" => "",
            "/è|é|ê|ë|ē|ĕ|ė|ę|ě/" => "",
            "/Ĝ|Ğ|Ġ|Ģ/" => "",
            "/ĝ|ğ|ġ|ģ/" => "",
            "/Ĥ|Ħ/" => "",
            "/ĥ|ħ/" => "",
            "/Ì|Í|Î|Ï|Ĩ|Ī| Ĭ|Ǐ|Į|İ/" => "",
            "/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/" => "",
            "/Ĵ/" => "",
            "/ĵ/" => "",
            "/Ķ/" => "",
            "/ķ/" => "",
            "/Ĺ|Ļ|Ľ|Ŀ|Ł/" => "",
            "/ĺ|ļ|ľ|ŀ|ł/" => "",
            "/Ñ|Ń|Ņ|Ň/" => "",
            "/ñ|ń|ņ|ň|ŉ/" => "",
            "/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/" => "",
            "/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/" => "",
            "/Ŕ|Ŗ|Ř/" => "",
            "/ŕ|ŗ|ř/" => "",
            "/Ś|Ŝ|Ş|Ș|Š/" => "",
            "/ś|ŝ|ş|ș|š|ſ/" => "",
            "/Ţ|Ț|Ť|Ŧ/" => "",
            "/ţ|ț|ť|ŧ/" => "",
            "/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/" => "",
            "/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/" => "",
            "/Ý|Ÿ|Ŷ/" => "",
            "/ý|ÿ|ŷ/" => "",
            "/Ŵ/" => "",
            "/ŵ/" => "",
            "/Ź|Ż|Ž/" => "",
            "/ź|ż|ž/" => "",
            "/Æ|Ǽ/" => "E",
            "/ß/" => "s",
            "/Ĳ/" => "J",
            "/ĳ/" => "j",
            "/Œ/" => "E",
            "/ƒ/" => ""];
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
