<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Storage\Interfaces;

use Sq\Entity\Interfaces\EntityInterface;

/**
 * Interface StorageInterface
 *
 * Интерфейс хранилища данных (память, файлы, бд...)
 *
 * @package Sq\Repository\Interfaces
 */
interface StorageInterface
{
    /**
     * Метод создает запись в хранилище
     *
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function create(EntityInterface $entity): bool;

    /**
     * Обновляет запись в хранилище
     *
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function update(EntityInterface $entity): bool;

    /**
     * Удаляет запись из хранилище
     *
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function delete(EntityInterface $entity): bool;

    /**
     * Ищет записи в хранилище по заданным условиям
     *
     * @param array $conditions
     * 
     * @return EntityInterface[]
     */
    public function find(array $conditions): array;
    
    /**
     * Ищет одну запись в хранилище по заданным условиям
     *
     * @param array $conditions
     * 
     * @return null|EntityInterface
     */
    public function findOne(array $conditions): ?EntityInterface;
}
