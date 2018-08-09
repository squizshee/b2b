<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Service;

use Sq\Repository\AuthorRepository;
use Sq\Repository\PostRepository;
use Sq\Entity\Author;
use Sq\Entity\Post;

/**
 * Class AuthorService
 *
 * Сервис для работы с авторами и статьями
 *
 * @package Sq\Service
 */
class AuthorService
{
    /**
     * @var AuthorRepository
     */
    private $authorRepository;
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * AuthorService constructor.
     *
     * @param AuthorRepository $authorRepository
     * @param PostRepository $postRepository
     */
    public function __construct(AuthorRepository $authorRepository, PostRepository $postRepository)
    {
        $this->authorRepository = $authorRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * Обновляет или создает автора
     *
     * @param Author $author
     */
    public function saveAuthor(Author $author) {}

    /**
     * Удаляет автора
     *
     * @param Author $author
     */
    public function removeAuthor(Author $author) {}

    /**
     * Ищет автора по его ID
     *
     * @param int $id
     *
     * @return null|Author
     */
    public function getAuthor(int $id): ?Author {}

    /**
     * Ищет все статьи автора
     *
     * Так же получить все статьи автора возможно вызовом метода getPosts() объекта Author
     *
     * @param Author $author
     *
     * @return Post[]
     */
    public function getAuthorPosts(Author $author): array {}

    /**
     * Обновляет или создает статью
     *
     * @param Post $post
     */
    public function savePost(Post $post) {}

    /**
     * Удаляет статью
     *
     * @param Post $post
     */
    public function removePost(Post $post) {}
}