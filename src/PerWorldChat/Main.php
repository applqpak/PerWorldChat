<?php

  namespace PerWorldChat;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\Player;
  use pocketmine\Server;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\event\player\PlayerChatEvent;

  class Main extends PluginBase implements Listener
  {

    public function dataPath()
    {

      return $this->getDataFolder();

    }

    public function server()
    {

      return $this->getServer();

    }

    public function onEnable()
    {

      @mkdir($this->dataPath());

      $this->cfg = new Config($this->dataPath() . "config.yml", Config::YAML, array("logged-chat-disabled" => "true", "disabled-in-worlds" => array()));

    }
