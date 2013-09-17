<?php

namespace AlbumDoctrine\Entity;

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
     * @var \AlbumDoctrine\Entity\Album
     *
     * @ORM\ManyToOne(targetEntity="AlbumDoctrine\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     * })
     */
    private $album;



    /**
     * Get trackId
     *
     * @return integer 
     */
    public function getTrackId()
    {
        return $this->trackId;
    }

    /**
     * Set trackTitle
     *
     * @param string $trackTitle
     * @return Track
     */
    public function setTrackTitle($trackTitle)
    {
        $this->trackTitle = $trackTitle;

        return $this;
    }

    /**
     * Get trackTitle
     *
     * @return string 
     */
    public function getTrackTitle()
    {
        return $this->trackTitle;
    }

    /**
     * Set album
     *
     * @param \AlbumDoctrine\Entity\Album $album
     * @return Track
     */
    public function setAlbum(\AlbumDoctrine\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \AlbumDoctrine\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
