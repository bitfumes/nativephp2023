<?php

namespace App\Providers;

use App\Events\OpenAddReminderEvent;
use Native\Laravel\Facades\ContextMenu;
use Native\Laravel\Facades\Dock;
use Native\Laravel\Facades\Window;
use Native\Laravel\Facades\GlobalShortcut;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
            ->title('Reminder App')
            ->route('reminders')
            ->showDevTools(false)
            ->width(400)
            ->height(400);

        Menu::new()
            ->appMenu()
            ->submenu(
                'My Menu',
                Menu::new()
                    ->event(OpenAddReminderEvent::class, 'Add Reminder', 'CmdOrCtrl+R')
                    ->link('https://bitfumes.com', 'Bitfumes', "cmd+b")
                    ->toggleFullscreen()
                    ->separator()
                    ->quit()
            )
            ->register();

        // Menu::new()
        //     ->appMenu()
        //     ->submenu(
        //         'About',
        //         Menu::new()
        //             ->link('https://beyondco.de', 'Beyond Code update')
        //             ->link('https://simonhamp.me', 'Simon Hamp')
        //     )
        //     ->submenu(
        //         'View',
        //         Menu::new()
        //             ->toggleFullscreen()
        //             ->separator()
        //             ->link('https://laravel.com', 'Learn More', 'CmdOrCtrl+L')
        //     )
        //     ->register();

        // Window::open()
        //     ->width(800)
        //     ->height(800);

        /**
            Dock::menu(
                Menu::new()
                    ->event(DockItemClicked::class, 'Settings')
                    ->submenu('Help',
                        Menu::new()
                            ->event(DockItemClicked::class, 'About')
                            ->event(DockItemClicked::class, 'Learn More…')
                    )
            );

            ContextMenu::register(
                Menu::new()
                    ->event(ContextMenuClicked::class, 'Do something')
            );

            GlobalShortcut::new()
                ->key('CmdOrCtrl+Shift+I')
                ->event(ShortcutPressed::class)
                ->register();
        */
    }
}
