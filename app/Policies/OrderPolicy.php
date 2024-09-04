<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\Pengguna;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Pengguna $pengguna)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Pengguna $pengguna, Order $order)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Pengguna $pengguna)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Pengguna $pengguna, Order $order)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Pengguna $pengguna, Order $order)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Pengguna $pengguna, Order $order)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Pengguna $pengguna, Order $order)
    {
        //
    }
}
