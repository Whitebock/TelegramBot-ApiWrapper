<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#voice
 *
 * Voice Class
 * This object represents a voice note.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Voice extends File
{

    /**
     * @var int Duration of the audio in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var string MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Voice
     */
    public function setDuration(int $duration): Voice
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mime_type;
    }

    /**
     * @param string $mime_type
     * @return Voice
     */
    public function setMimeType(string $mime_type): Voice
    {
        $this->mime_type = $mime_type;
        return $this;
    }
}
