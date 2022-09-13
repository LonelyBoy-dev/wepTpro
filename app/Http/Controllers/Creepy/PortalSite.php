<?php

namespace App\Http\Controllers\Creepy;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortalSite extends Controller
{
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
                    $post->save();



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

                    return redirect('/blogs/'.$post->slug);
                });
            }
        });
    }
    function make_slug($string, $separator = '-') {
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


}
