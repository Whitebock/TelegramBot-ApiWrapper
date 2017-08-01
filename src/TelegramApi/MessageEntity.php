<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#messageentity
 *
 * MessageEntity Class
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class MessageEntity
{
    /**
     * @var string Type of the entity. Can be mention (@username), hashtag, bot_command, url, email, bold (bold text), italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs), text_mention (for users without usernames)
     */
    protected $type;

    /**
     * @var int Offset in UTF-16 code units to the start of the entity
     */
    protected $offset;

    /**
     * @var int Length of the entity in UTF-16 code units
     */
    protected $length;

    /**
     * @var string For “text_link” only, url that will be opened after user taps on the text
     */
    protected $url;

    /**
     * @var User For “text_mention” only, the mentioned user
     */
    protected $user;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
