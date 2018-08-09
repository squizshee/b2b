<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Entity;

use Entity\Interfaces\Entity;
use Sq\Entity\Interfaces\UserInterface;

/**
 * Class User
 *
 * Класс описывающий объект автора
 *
 * @package Sq\Entity
 */
class Author extends Entity implements UserInterface
{
    /**
     * Имя автора
     *
     * @var string
     */
    private $name;
    /**
     * Статьи автора
     *
     * @var Post[]
     */
    private $posts = [];

    /**
     * Создает экземпляр объекта Author из массива данных
     *
     * @param array $state
     *
     * @return Author
     */
    public static function fromState(array $state): Author {}

    /**
     * Возвращает данные объекта в виде массива
     *
     * @param Author $author
     *
     * @return array
     */
    public static function toState(Author $author): array {}

    /**
     * Возвращает имя автора
     *
     * @return string
     */
    public function getName(): string {}

    /**
     * Устанавливает имя автора
     *
     * @param string $name
     */
    public function setName(string $name) {}

    /**
     * Возвращает статьи
     *
     * @return Post[]
     */
    public function getPosts(): array {}

    /**
     * Добавляет статью
     *
     * @param Post $post
     */
    public function addPost(Post $post) {}

    /**
     * Удаляет статью
     *
     * @param Post $post
     */
    public function removePost(Post $post) {}
}