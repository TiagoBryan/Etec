package com.mycompany.mavenproject2;

import com.mycompany.mavenproject2.js.PlatformServices;
import org.netbeans.api.htmlui.OpenHTMLRegistration;
import org.openide.awt.ActionID;
import org.openide.awt.ActionReference;
import org.openide.awt.ActionReferences;
import org.openide.util.NbPreferences;

public class NbMain {
    private NbMain() {
    }
    
    @ActionID(
        category = "Games",
        id = "com.mycompany.mavenproject2.OpenPage"
    )
    @OpenHTMLRegistration(
        url="index.html",
        displayName = "Open Your Page",
        iconBase = "com/mycompany/mavenproject2/icon.png"
    )
    @ActionReferences({
        @ActionReference(path = "Menu/Window"),
        @ActionReference(path = "Toolbars/Games")
    })
    public static void onPageLoad() throws Exception {
        Main.onPageLoad(new NbServices());
    }

    private static class NbServices extends PlatformServices {
        public NbServices() {
        }

        @Override
        public String getPreferences(String key) {
            return NbPreferences.forModule(NbMain.class).get(key, null);
        }

        @Override
        public void setPreferences(String key, String value) {
            NbPreferences.forModule(NbMain.class).put(key, value);
        }
    }
}
