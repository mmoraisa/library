<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 14:50
 */

namespace App\Http\VO;

class BotResponseVO
{
    private $speech;
    private $displayText;
    private $data;
    private $contextOut;
    private $source;

    /**
     * BotResponseVO constructor.
     * @param $speech
     * @param $displayText
     * @param $data
     * @param $contextOut
     * @param $source
     */
    public function __construct($speech, $displayText, $data, $contextOut, $source)
    {
        $this->speech = $speech;
        $this->displayText = $displayText;
        $this->data = $data;
        $this->contextOut = $contextOut;
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getSpeech()
    {
        return $this->speech;
    }

    /**
     * @param mixed $speech
     */
    public function setSpeech($speech)
    {
        $this->speech = $speech;
    }

    /**
     * @return mixed
     */
    public function getDisplayText()
    {
        return $this->displayText;
    }

    /**
     * @param mixed $displayText
     */
    public function setDisplayText($displayText)
    {
        $this->displayText = $displayText;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getContextOut()
    {
        return $this->contextOut;
    }

    /**
     * @param mixed $contextOut
     */
    public function setContextOut($contextOut)
    {
        $this->contextOut = $contextOut;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
}