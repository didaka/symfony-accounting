<?php
/**
 * Created by PhpStorm.
 * User: didaka
 * Date: 12/12/16
 * Time: 2:22 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="expense")
 */
class Expense
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     * @ORM\Column(type="string")
     */
    private $amount;
    /**
     * @ORM\Column(type="string")
     */
    private $notes;
    /**
     * @ORM\Column(type="string")
     */
    private $creator;
    /**
     * @ORM\Column(type="integer")
     */
    private $paid_by;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date_paid;
    /**
     * @ORM\Column(type="datetime")
     */
    private $timestamp;

}