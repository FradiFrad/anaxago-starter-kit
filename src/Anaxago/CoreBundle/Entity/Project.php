<?php

namespace Anaxago\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="Anaxago\CoreBundle\Repository\ProjectRepository")
 */
class Project
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
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_financed", type="boolean")
     */
    private $isFinanced = false;

    /**
     * One Project has many usersProject.
     * @OneToMany(targetEntity="UserProject", mappedBy="project"))
     */
    private $usersProject;

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
     * Set slug
     *
     * @param string $slug
     *
     * @return Project
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Project
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set isFinanced
     *
     * @param string $isFinanced
     *
     * @return Project
     */
    public function setIsFinanced(boolean $isFinanced): self
    {
        $this->isFinanced = $isFinanced;

        return $this;
    }

    /**
     * Get isFinanced
     *
     * @return boolean
     */
    public function isFinanced(): boolean
    {
        return $this->isFinanced;
    }

    /**
     * Set usersProject
     *
     * @param array $usersProject
     *
     * @return Project
     */
    public function setUsersProject(array $usersProject): self
    {
        $this->usersProject = $usersProject;

        return $this;
    }

    /**
     * Get usersProject
     *
     * @return array
     */
    public function getUsersProject(): array
    {
        return $this->usersProject;
    }
}
