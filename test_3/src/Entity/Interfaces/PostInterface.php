<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Entity\Interfaces;

/**
 * Interface PostInterface
 *
 * Интерфейс статей
 *
 * @package Sq\Entity\Interfaces
 */
interface PostInterface
{
    /**
     * @return UserInterface
     */
    public function getAuthor(): UserInterface;

    /**
     * @param UserInterface $user
     */
    public function setAuthor(UserInterface $user);
}