<?php

namespace Anaxago\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Anaxago\CoreBundle\Entity\User;
use Anaxago\CoreBundle\Entity\Project;

/**
 * UserProject
 *
 * @ORM\Table(name="user_project")
 * @ORM\Entity(repositoryClass="Anaxago\CoreBundle\Repository\UserProjectRepository")
 */
class UserProject
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     * Many UserProjects have one user
     * @ManyToOne(targetEntity="User", inversedBy="userProjects")
     */
    private $user;

    /**
     * @var Project
     * Many UserProjects have one project
     * @ManyToOne(targetEntity="Project", inversedBy="usersProject")
     * @JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     * @var decimal
     *
     * @ORM\Column(name="desired_investment", type="decimal")
     */
    private $desiredInvestment;

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
     * Set user
     *
     * @param  $user
     *
     * @return UserProject
     */
    public function setUser($userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get user
     *
     * @return
     */
    public function getUser()
    {
        return $this->userId;
    }

    /**
     * Set project
     *
     * @param $project
     *
     * @return UserProject
     */
    public function setProject($project): self
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

    /**
     * Set desiredInvestment
     *
     * @param decimal $desiredInvestment
     *
     * @return UserProject
     */
    public function setDesiredInvestment(float $desiredInvestment): self
    {
        $this->desiredInvestment = $desiredInvestment;

        return $this;
    }

    /**
     * Get desiredInvestment
     *
     * @return decimal
     */
    public function getDesiredInvestment(): float
    {
        return $this->desiredInvestment;
    }
}
