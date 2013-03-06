<?php

namespace FSC\HateoasBundle\Metadata;

class RelationMetadata implements RelationMetadataInterface
{
    private $rel;
    private $url;
    private $route;
    private $params;
    private $skipIfNull = array();
    private $content;
    private $options;
    private $attributes;

    public function __construct($rel)
    {
        $this->rel = $rel;
        $this->params = array();
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * {@inheritdoc}
     */
    public function getParams()
    {
        return $this->params;
    }

    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * {@inheritdoc}
     */
    public function getRel()
    {
        return $this->rel;
    }

    public function setRoute($route)
    {
        $this->route = $route;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoute()
    {
        return $this->route;
    }

    public function setContent(RelationContentMetadataInterface $content)
    {
        $this->content = $content;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->content;
    }

    public function setUrl($url)
    {
        $this->url = (string) $url;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    public function setSkipIfNull($skipIfNull)
    {
        $this->skipIfNull = (array) $skipIfNull;
    }

    /**
     * {@inheritdoc}
     */
    public function getSkipIfNull()
    {
        return $this->skipIfNull;
    }
}
