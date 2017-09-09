<?php

if (!function_exists('flash')) {
    // flash message to session
    function flash($class, $message)
    {
        request()->session()->flash('flash', [$class, $message]);
    }
}

if (!function_exists('activity')) {
    // log activity in database
    function activity($log, $model = null)
    {
        app(config('turtle.models.activity'))->create([
            'user_id' => auth()->check() ? auth()->user()->id : null,
            'model_id' => $model ? $model->id : null,
            'model_class' => $model ? get_class($model) : null,
            'data' => json_encode(request()->except(['_method', '_token', 'current_password', 'password', 'password_confirmation', 'g-recaptcha-response'])),
            'log' => $log,
        ]);
    }
}

if (!function_exists('timezones')) {
    // show list of nicely formatted PHP timezones
    function timezones()
    {
        $timezones = [];

        foreach (timezone_identifiers_list() as $identifier) {
            $datetime = new \DateTime('now', new DateTimeZone($identifier));
            $timezones[] = [
                'sort' => str_replace(':', '', $datetime->format('P')),
                'identifier' => $identifier,
                'label' => '(UTC ' . $datetime->format('P') . ') ' . str_replace('_', ' ', implode(', ', explode('/', $identifier))),
            ];
        }

        usort($timezones, function ($a, $b) {
            return $a['sort'] - $b['sort'] ?: strcmp($a['identifier'], $b['identifier']);
        });

        return $timezones;
    }
}