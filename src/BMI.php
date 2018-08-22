<?php
/**
 * Desc
 *
 * @author Heiko Griga <h.griga@teilehaber.de>
 * @date   22.08.2018, 14:51
 */

namespace BMI;

/**
 * Class BMI
 */
class BMI
{
    
    /**
     * weight in kilogram
     *
     * @var float $weight;
     */
    private $weight;
    
    /**
     * height in centimeters
     *
     * @var float $height
     */
    private $height;
    
    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    
    /**
     * @param float $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    /**
     * @throws \InvalidArgumentException
     */
    public function calculateBMI()
    {
        if (null === $this->weight) {
            throw new \InvalidArgumentException('weight is empty');
        }
        
        if (null === $this->height) {
            throw new \InvalidArgumentException('height is empty');
        }
        
        return ($this->weight / ($this->height ** 2));
    }
}