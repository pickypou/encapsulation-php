<?php
//Character.php
class Character
{
	private $life;
	private $attack;
	private $name;

    public function __construct(string $name)
    {
        $this->name = ucfirst($name);
    }    

    /**
     *@return int
     */
	public function getLife(): int
	{
    	    return $this->life;
	}
    /**
     * @param int $life
     * @return Character
     */
	public function setLife(int $life): Character
    {
        if ($life > 100){
            $this->life = 100;
        }else {
           $this->life = $life;
	}
    return $this;
        
        }
    	
     /**
      *@return int
       */   
	public function getAttack(): int
	{
    	    return $this->attack;
	}
    /**
     * @param int $attack
     * @return Character
     */
	public function setAttack($attack):Character
	{
    	    $this->attack = $attack;
            return $this;
	}

    /**
     * @return  string
     */
	public function getName(): string
	{
    	    return $this->name;
	}

    /**
     * @param string $name
     * @return Character
     */
	public function setName($name):Character
	{
    	    $this->name = ucfirst($name);
            return $this;
	}

   
}