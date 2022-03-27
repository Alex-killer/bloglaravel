<?php


namespace App\Services\Post;


use App\Models\Post;

class Service
{
    public function store($data)
    {
        $tags = $data['tag_ids'];
        unset($data['tag_ids']);

        $post = Post::create($data);

        $post->tags()->attach($tags); // привязываем к конкретному посту теги, через модель Post  и связующую таблицу pivot(tags)

    }

    public function update($post, $data)
    {
        $tags = $data['tag_id'];
        unset($data['tag_id']);

        $post->update($data);
        $post->tags()->sync($tags); // удаление всех предыдущих тегов и добавление новых
    }


}
