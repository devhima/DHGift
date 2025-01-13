package com.dh.gift.client.receivers;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;

import com.dh.gift.client.ForegroundService;
import com.dh.gift.client.MainService;

public class BootCompleted extends BroadcastReceiver {
    @Override
    public void onReceive(Context context, Intent intent) {
        context.startService(new Intent(context, ForegroundService.class));
    }
}
