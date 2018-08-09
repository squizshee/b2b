<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Repository;

use Sq\Entity\Interfaces\UserInterface;
use Sq\Entity\Post;
use Sq\Exception\CreateEntityException;
use Sq\Exception\ObjectNotFoundException;
use Sq\Exception\UpdateEntityException;
use Sq\Storage\Interfaces\StorageInterface;

/**
 * Class PostRepository
 *
 * Каждую запись выборки возвращает в виде объекта класса Post, который реализует паттерн Data Mapper
 *
 * @package Repository
 */
class PostRepository
{
    /**
     * @var StorageInterface
     */
    private $storage;

    /**
     * UserRepository constructor.
     *
     * @param StorageInterface $storage
     */
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    /**
     * Сохраняет данные статьи в хранилище, если статьи не существует - добавит
     *
     * @param Post $post
     *
     * @return bool
     *
     * @throws CreateEntityException ошибка добавления новой статьи
     * @throws UpdateEntityException ошибка обновления существующей статьи
     */
    public function save(Post $post): bool {}

    /**
     * Ищет статью в хранилище
     *
     * @param int $id
     *
     * @return Post
     *
     * @throws ObjectNotFoundException статья не найдена
     */
    public function findOne(int $id): Post {}

    /**
     * Ищет статьи в хранилище по заданным условиям
     *
     * @param array $conditions
     *
     * @return Post[] может вернуть пустой массив, если статьи не найдены
     */
    public function findAll(array $conditions = []): array {}

    /**
     * Ищет все статьи автора
     *
     * @param UserInterface $user
     *
     * @return Post[] может вернуть пустой массив, если статьи не найдены
     */
    public function findAllByAuthor(UserInterface $user): array {}

    /**
     * Удаляет статью
     *
     * @param Post $post
     *
     * @return bool
     *
     * @throws ObjectNotFoundException статья не найдена
     */
    public function remove(Post $post): bool {}
}