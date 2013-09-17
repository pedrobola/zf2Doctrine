<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Track
 *
 * @ORM\Table(name="track", indexes={@ORM\Index(name="fk_track_album", columns={"album_id"})})
 * @ORM\Entity
 */
class Track
{
    /**
     * @var integer
     *
     * @ORM\Column(name="track_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trackId;

    /**
     * @var string
     *
     * @ORM\Column(name="track_title", type="string", length=255, nullable=false)
     */
    private $trackTitle;

    /**
     * @var \Album\Entity\Album
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     * })
     */
    private $album;


}
