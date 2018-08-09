<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Repository;

use Sq\Entity\Author;
use Sq\Exception\CreateEntityException;
use Sq\Exception\ObjectNotFoundException;
use Sq\Exception\UpdateEntityException;
use Sq\Storage\Interfaces\StorageInterface;

/**
 * Class UserRepository
 *
 * Каждую запись выборки возвращает в виде объекта класса Author, который реализует паттерн Data Mapper
 *
 * @package Repository
 */
class AuthorRepository
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
     * Сохраняет данные автора в хранилище, если автора не существует - добавит
     *
     * @param Author $author
     *
     * @return bool
     *
     * @throws CreateEntityException ошибка добавления нового автора
     * @throws UpdateEntityException ошибка обновления существующего автора
     */
    public function save(Author $author): bool {}

    /**
     * Ищет автора в хранилище
     *
     * @param int $id
     *
     * @return Author
     *
     * @throws ObjectNotFoundException автор не найден
     */
    public function findOne(int $id): Author {}

    /**
     * Ищет авторов в хранилище по заданным условиям
     *
     * @param array $conditions
     *
     * @return Author[] может вернуть пустой массив, если авторы не найдены
     */
    public function findAll(array $conditions = []): array {}

    /**
     * Удаляет автора
     *
     * @param Author $author
     *
     * @return bool
     *
     * @throws ObjectNotFoundException автор не найден
     */
    public function remove(Author $author): bool {}
}