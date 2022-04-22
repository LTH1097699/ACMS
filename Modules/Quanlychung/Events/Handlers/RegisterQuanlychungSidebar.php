<?php

namespace Modules\Quanlychung\Events\Handlers;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Events\BuildingSidebar;
use Modules\User\Contracts\Authentication;

class RegisterQuanlychungSidebar implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function handle(BuildingSidebar $sidebar)
    {
        $sidebar->add($this->extendWith($sidebar->getMenu()));
    }

    /**
     * @param Menu $menu
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('quanlychung::quanlychungs.title.quanlychungs'), function (Group $group) {
            $group->weight(3);
            
            $group->item(trans('quanlychung::chucdanhs.title.chucdanhs'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(0);
                $item->route('admin.quanlychung.chucdanh.index');
                $item->authorize(
                     /* append */
                     $this->auth->hasAccess('quanlychung.chucdanhs.index')
                );
            });
            $group->item(trans('quanlychung::phongbans.title.phongbans'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(1);
                $item->route('admin.quanlychung.phongban.index');
                $item->authorize(
                     /* append */
                    $this->auth->hasAccess('quanlychung.phongbans.index')
                );
            });
            $group->item(trans('quanlychung::noibotcts.title.noibotcts'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(2);
                $item->route('admin.quanlychung.noibotct.index');
                $item->authorize(
                     /* append */
                    $this->auth->hasAccess('quanlychung.noibotcts.index')
                );
            });
            $group->item(trans('quanlychung::noibodonvis.title.noibodonvis'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(3);
                $item->route('admin.quanlychung.noibodonvi.index');
                $item->authorize(
                     /* append */
                    $this->auth->hasAccess('quanlychung.noibodonvis.index')
                );               
            });
            $group->item(trans('phatsinhtang::trangthais.title.trangthais'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(4);
                $item->route('admin.phatsinhtang.trangthai.index');
                $item->authorize(
                     /* append */
                    $this->auth->hasAccess('phatsinhtang.trangthais.index')
                );               
            });
            $group->item(trans('hopdong::hopdongs.title.hopdongs'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->route('admin.hopdong.hopdong.index');
                $item->authorize(
                   /* append */
                   $this->auth->hasAccess('hopdong.hopdongs.index')
               );
            });

        });

        return $menu;
    }
}
