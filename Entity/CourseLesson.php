<?php

namespace Glory\Bundle\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseLesson
 *
 * @ORM\Table(name="course_lesson")
 * @ORM\Entity
 */
class CourseLesson
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
     * @var integer
     *
     * @ORM\Column(name="courseId", type="integer", nullable=true)
     */
    protected $courseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="chapter_id", type="integer", nullable=true)
     */
    protected $chapterid;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    protected $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="seq", type="integer", nullable=true)
     */
    protected $seq;

    /**
     * @var boolean
     *
     * @ORM\Column(name="free", type="boolean", nullable=true)
     */
    protected $free;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=true)
     */
    protected $status;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", nullable=true)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    protected $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", nullable=true)
     */
    protected $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=true)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    protected $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="giveCredit", type="integer", nullable=true)
     */
    protected $givecredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="requireCredit", type="integer", nullable=true)
     */
    protected $requirecredit;

    /**
     * @var MediaInterface
     */
    protected $media;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", nullable=true)
     */
    protected $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="materialNum", type="integer", nullable=true)
     */
    protected $materialnum;

    /**
     * @var integer
     *
     * @ORM\Column(name="quizNum", type="integer", nullable=true)
     */
    protected $quiznum;

    /**
     * @var integer
     *
     * @ORM\Column(name="learnedNum", type="integer", nullable=true)
     */
    protected $learnednum;

    /**
     * @var integer
     *
     * @ORM\Column(name="viewed_num", type="integer", nullable=true)
     */
    protected $viewedNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="start_time", type="integer", nullable=true)
     */
    protected $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_time", type="integer", nullable=true)
     */
    protected $endTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_num", type="integer", nullable=true)
     */
    protected $memberNum;

    /**
     * @var string
     *
     * @ORM\Column(name="replay_status", type="string", nullable=true)
     */
    protected $replayStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxOnlineNum", type="integer", nullable=true)
     */
    protected $maxonlinenum;

    /**
     * @var integer
     *
     * @ORM\Column(name="liveProvider", type="integer", nullable=true)
     */
    protected $liveprovider;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_time", type="integer", nullable=true)
     */
    protected $createdTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_time", type="integer", nullable=true)
     */
    protected $updatedTime;

    /**
     * @var float
     *
     * @ORM\Column(name="suggest_hours", type="float", precision=10, scale=1, nullable=true)
     */
    protected $suggesthours;


}
