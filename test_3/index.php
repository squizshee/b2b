<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

require_once __DIR__ . '/autoload.php';

$storage = new \Sq\Storage\InMemoryStorage();

$authorRepository = new \Sq\Repository\AuthorRepository($storage);
$postRepository = new \Sq\Repository\PostRepository($storage);

$authorService = new \Sq\Service\AuthorService($authorRepository, $postRepository);

$author1 = \Sq\Entity\Author::fromState(['name' => 'User 1']);
$authorService->saveAuthor($author1);

$author2 = \Sq\Entity\Author::fromState(['name' => 'User 2']);
$authorService->saveAuthor($author2);

$post1 = \Sq\Entity\Post::fromState(['title' => 'Post 1', 'text' => 'Post text 1']);
$post1->setAuthor($author1);
$authorService->savePost($post1);

$post2 = \Sq\Entity\Post::fromState(['title' => 'Post 2', 'text' => 'Post text 2']);
$post2->setAuthor($author1);
$authorService->savePost($post2);

$post3 = \Sq\Entity\Post::fromState(['title' => 'Post 3', 'text' => 'Post text 3']);
$post3->setAuthor($author2);
$authorService->savePost($post3);

$post2->setAuthor($author2);
$authorService->savePost($post2);

//$posts = $author2->getPosts();
$posts = $authorService->getAuthorPosts($author2);

echo sprintf('Author: %s posts:<hr>', $author2->getName());
foreach ($posts as $post) {
    echo sprintf('Post text: %s<hr>', $post->getText());
}
