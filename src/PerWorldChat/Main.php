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

    public function onEnable()
    {
