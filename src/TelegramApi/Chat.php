<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#chat
 *
 * Chat Class
 * This object represents a chat.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Chat
{
    /**
     * @var int Unique identifier for this chat.
     */
    protected $id;

    /**
     * @var string Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    protected $type;

    /**
     * @var string Title, for supergroups, channels and group chats
     */
    protected $title;

    /**
     * @var string Username, for private chats, supergroups and channels if available
     */
    protected $username;

    /**
     * @var string First name of the other party in a private chat
     */
    protected $first_name;

    /**
     * @var string Last name of the other party in a private chat
     */
    protected $last_name;

    /**
     * @var bool True if a group has ‘All Members Are Admins’ enabled
     */
    protected $all_members_are_administrators;

    /**
     * @var string Description, for supergroups and channel chats
     */
    protected $description;

    /**
     * @var string Chat invite link, for supergroups and channel chats
     */
    protected $invite_link;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @return boolean
     */
    public function isAllMembersAreAdministrators(): bool
    {
        return $this->all_members_are_administrators;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getInviteLink(): string
    {
        return $this->invite_link;
    }
}
