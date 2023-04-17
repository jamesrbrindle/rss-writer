<?php

namespace MarcW\RssWriter\Extension\Itunes;

/**
 * @see https://help.apple.com/itc/podcasts_connect/#/itcb54353390
 */
abstract class Common
{
    private $author;
    private $block;
    private $image;
    private $explicit;
    private $subtitle;
    private $summary;
    private $title;
    private $keywords;

    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    public function getBlock()
    {
        return $this->block;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setExplicit($explicit)
    {
        $this->explicit = $explicit;

        return $this;
    }

    public function getExplicit()
    {
        return $this->explicit;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSubtitle()
    {
        return $this->subtitle;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }
}
