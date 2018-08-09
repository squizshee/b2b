<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Entity;

use Entity\Interfaces\Entity;
use Sq\Entity\Interfaces\PostInterface;
use Sq\Entity\Interfaces\UserInterface;

/**
 * Class Post
 *
 * Класс описывающий объект статьи
 *
 * @package Sq\Entity
 */
class Post extends Entity implements PostInterface
{
    /**
     * Пользователь - автор статьи
     *
     * @var Author
     */
    private $author;
    /**
     * Текст статьи
     *
     * @var string 
     */
    private $text;

    /**
     * Создает экземпляр объекта Post из массива данных
     *
     * @param array $state
     *
     * @return Post
     */
    public static function fromState(array $state): Post {}

    /**
     * Возвращает данные объекта в виде массива
     *
     * @param Post $post
     *
     * @return array
     */
    public static function toState(Post $post): array {}

    /**
     * Возвращает автора статьи
     *
     * @return Author
     */
    public function getAuthor(): UserInterface {}

    /**
     * Устанавливает автора статьи
     *
     * @param Author $author
     */
    public function setAuthor(UserInterface $author) {}

    /**
     * Возвращает текст статьи
     *
     * @return string
     */
    public function getText(): string {}

    /**
     * Устанавливает текст статьи
     *
     * @param string $text
     */
    public function setText(string $text) {}
}
