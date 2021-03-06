<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtgate.proto

namespace Vitess\Proto\Vtgate {

  class SplitQueryResponse extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Vtgate\SplitQueryResponse\Part[]  */
    public $splits = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtgate.SplitQueryResponse');

      // REPEATED MESSAGE splits = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "splits";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Vtgate\SplitQueryResponse\Part';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <splits> has a value
     *
     * @return boolean
     */
    public function hasSplits(){
      return $this->_has(1);
    }
    
    /**
     * Clear <splits> value
     *
     * @return \Vitess\Proto\Vtgate\SplitQueryResponse
     */
    public function clearSplits(){
      return $this->_clear(1);
    }
    
    /**
     * Get <splits> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Vtgate\SplitQueryResponse\Part
     */
    public function getSplits($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <splits> value
     *
     * @param \Vitess\Proto\Vtgate\SplitQueryResponse\Part $value
     * @return \Vitess\Proto\Vtgate\SplitQueryResponse
     */
    public function setSplits(\Vitess\Proto\Vtgate\SplitQueryResponse\Part $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <splits>
     *
     * @return \Vitess\Proto\Vtgate\SplitQueryResponse\Part[]
     */
    public function getSplitsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <splits>
     *
     * @param \Vitess\Proto\Vtgate\SplitQueryResponse\Part $value
     * @return \Vitess\Proto\Vtgate\SplitQueryResponse
     */
    public function addSplits(\Vitess\Proto\Vtgate\SplitQueryResponse\Part $value){
     return $this->_add(1, $value);
    }
  }
}

