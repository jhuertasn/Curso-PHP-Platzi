<?php

interface Search
{
    public function all();

}

class Users implements Search
{
    public function all()
    {
        return "Obteniendo a los Users, XML";
    }
}

class Post implements Search
{
    public function all()
    {
        return "Obteniendo a los Posts, JSON";
    }
}

$user = new Users();
echo $user->all();

$post = new Post();
echo $post->all();