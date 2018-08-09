<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Entity\Interfaces;

/**
 * Interface UserInterface
 *
 * Интерфейс пользователей
 *
 * @package Sq\Entity\Interfaces
 */
interface UserInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}