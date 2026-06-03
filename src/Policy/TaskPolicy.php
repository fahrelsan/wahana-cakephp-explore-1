<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Task;
use Authorization\IdentityInterface;

/**
 * Task policy
 */
class TaskPolicy
{
    /**
     * Check if $user can add Task
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Task $task
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Task $task)
    {
        return true;
    }

    /**
     * Check if $user can edit Task
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Task $task
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Task $task)
    {
        $userId = $user->getOriginalData()->id;
        return $task->user_id === $userId;
    }

    /**
     * Check if $user can delete Task
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Task $task
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Task $task)
    {
        $userId = $user->getOriginalData()->id;
        return $task->user_id === $userId;
    }

    /**
     * Check if $user can view Task
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Task $task
     * @return bool
     */
    public function canView(IdentityInterface $user, Task $task)
    {
        return true;
    }
    public function canIndex(IdentityInterface $user, Task $task){
        return true;
    }
}
