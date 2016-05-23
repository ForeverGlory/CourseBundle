<?php

namespace Glory\Bundle\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseLessonLearn
 *
 * @ORM\Table("course_lesson_learn")
 * @ORM\Entity
 */
class CourseLessonLearn
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var UserInterface
     *
     */
    protected $user;

    /**
     * @var CourseInterface
     *
     */
    protected $course;

    /**
     * @var CourseLessonInterface
     */
    protected $lesson;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=true)
     */
    protected $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="start_time", type="integer", nullable=true)
     */
    protected $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="finished_time", type="integer", nullable=true)
     */
    protected $finishedTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="learn_time", type="integer", nullable=true)
     */
    protected $learnTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="watch_time", type="integer", nullable=true)
     */
    protected $watchTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="watch_num", type="integer")
     */
    protected $watchNum = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="video_status", type="string", nullable=true)
     */
    protected $videoStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_time", type="integer", nullable=true)
     */
    protected $updateTime;


}
