package com.mycompany.mavenproject2;

import net.java.html.boot.BrowserBuilder;
import com.mycompany.mavenproject2.js.PlatformServices;
import apple.foundation.NSUserDefaults;

public final class MoeMain {
    public static void main(String... args) throws Exception {
        BrowserBuilder.newBrowser().
            loadPage("pages/index.html").
            loadFinished(MoeMain::onPageLoad).
            showAndWait();
        System.exit(0);
    }

    public static void onPageLoad() {
        DataModel.onPageLoad(new MoeServices());
    }

    private static final class MoeServices extends PlatformServices {
        @Override
        public String getPreferences(String key) {
            return NSUserDefaults.standardUserDefaults().stringForKey(key);
        }

        @Override
        public void setPreferences(String key, String value) {
            NSUserDefaults.standardUserDefaults().setValueForKey(key, value);
        }
    }
}


