<?php

namespace AppBundle\Entity;

/**
 * Question
 */
class Question
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var bool
     */
    private $isAnswered;

    /**
     * @var \DateTime
     */
    private $askedAt;

    /**
     * @var \DateTime
     */
    private $answeredAt;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Question
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set isAnswered
     *
     * @param boolean $isAnswered
     *
     * @return Question
     */
    public function setIsAnswered($isAnswered)
    {
        $this->isAnswered = $isAnswered;

        return $this;
    }

    /**
     * Get isAnswered
     *
     * @return bool
     */
    public function getIsAnswered()
    {
        return $this->isAnswered;
    }

    /**
     * @return \DateTime
     */
    public function getAskedAt()
    {
        return $this->askedAt;
    }

    /**
     * @param \DateTime $askedAt
     */
    public function setAskedAt($askedAt)
    {
        $this->askedAt = $askedAt;
    }

    /**
     * @return \DateTime
     */
    public function getAnsweredAt()
    {
        return $this->answeredAt;
    }

    /**
     * @param \DateTime $answeredAt
     */
    public function setAnsweredAt($answeredAt)
    {
        $this->answeredAt = $answeredAt;
    }
}

