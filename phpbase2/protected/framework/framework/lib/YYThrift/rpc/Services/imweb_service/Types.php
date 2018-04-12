<?php
namespace Services\imweb_service;

/**
 * Autogenerated by Thrift Compiler (0.9.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class query_resultset {
  static $_TSPEC;

  public $key_index = null;
  public $dataset = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'key_index',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::I32,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::I32,
            ),
          ),
        2 => array(
          'var' => 'dataset',
          'type' => TType::LST,
          'etype' => TType::LST,
          'elem' => array(
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
              'type' => TType::STRING,
              ),
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['key_index'])) {
        $this->key_index = $vals['key_index'];
      }
      if (isset($vals['dataset'])) {
        $this->dataset = $vals['dataset'];
      }
    }
  }

  public function getName() {
    return 'query_resultset';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::MAP) {
            $this->key_index = array();
            $_size0 = 0;
            $_ktype1 = 0;
            $_vtype2 = 0;
            $xfer += $input->readMapBegin($_ktype1, $_vtype2, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $key5 = '';
              $val6 = 0;
              $xfer += $input->readString($key5);
              $xfer += $input->readI32($val6);
              $this->key_index[$key5] = $val6;
            }
            $xfer += $input->readMapEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::LST) {
            $this->dataset = array();
            $_size7 = 0;
            $_etype10 = 0;
            $xfer += $input->readListBegin($_etype10, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11)
            {
              $elem12 = null;
              $elem12 = array();
              $_size13 = 0;
              $_etype16 = 0;
              $xfer += $input->readListBegin($_etype16, $_size13);
              for ($_i17 = 0; $_i17 < $_size13; ++$_i17)
              {
                $elem18 = null;
                $xfer += $input->readString($elem18);
                $elem12 []= $elem18;
              }
              $xfer += $input->readListEnd();
              $this->dataset []= $elem12;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('query_resultset');
    if ($this->key_index !== null) {
      if (!is_array($this->key_index)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('key_index', TType::MAP, 1);
      {
        $output->writeMapBegin(TType::STRING, TType::I32, count($this->key_index));
        {
          foreach ($this->key_index as $kiter19 => $viter20)
          {
            $xfer += $output->writeString($kiter19);
            $xfer += $output->writeI32($viter20);
          }
        }
        $output->writeMapEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataset !== null) {
      if (!is_array($this->dataset)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('dataset', TType::LST, 2);
      {
        $output->writeListBegin(TType::LST, count($this->dataset));
        {
          foreach ($this->dataset as $iter21)
          {
            {
              $output->writeListBegin(TType::STRING, count($iter21));
              {
                foreach ($iter21 as $iter22)
                {
                  $xfer += $output->writeString($iter22);
                }
              }
              $output->writeListEnd();
            }
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

