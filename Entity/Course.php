<?php

namespace Glory\Bundle\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity
 */
class Course
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", unique=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", nullable=false)
     */
    protected $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", nullable=false)
     */
    protected $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string")
     */
    protected $status;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    protected $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_student", type="integer")
     */
    protected $maxStudent;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=2)
     */
    protected $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiry_day", type="integer")
     */
    protected $expiryday;

    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_num", type="integer")
     */
    protected $lessonnum;

    /**
     * @var float
     *
     * @ORM\Column(name="rating", type="float", precision=10, scale=2)
     */
    protected $rating;

    /**
     * @var Category
     */
    protected $category;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text")
     */
    protected $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=false)
     */
    protected $about;

    /**
     * @var array
     */
    protected $teachers = array();

    /**
     * @var string
     *
     * @ORM\Column(name="goals", type="text", nullable=false)
     */
    protected $goals;

    /**
     * @var string
     *
     * @ORM\Column(name="audiences", type="text", nullable=false)
     */
    protected $audiences;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", nullable=false)
     */
    protected $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="student_num", type="integer", nullable=false)
     */
    protected $studentNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="hit_num", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    protected $hitNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_num", type="integer")
     */
    protected $noteNum;

    /**
     * @var integer
     */
    protected $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_time", type="integer", nullable=false)
     */
    protected $createdTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_time", type="integer", nullable=false)
     */
    protected $updatedTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="free_start_time", type="integer", nullable=false)
     */
    protected $freeStartTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="free_end_time", type="integer", nullable=false)
     */
    protected $freeEndTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="locked", type="integer")
     */
    protected $locked = 1;


}
