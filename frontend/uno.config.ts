import presetIcons from '@unocss/preset-icons'
import { defineConfig } from 'unocss'
import { readFile } from 'fs/promises'
import path from 'path'

export default defineConfig({
    presets: [
        presetIcons({
            autoInstall: true,
            warn: true,
            collections: {
                'my-icons': async (iconName) => {
                    const filePath = path.join(import.meta.dirname, `./src/icons/${iconName}.svg`);
                    return await readFile(filePath, 'utf-8');
                }
            }
        })
    ],
    content: {
        filesystem: [
            path.resolve(import.meta.dirname, '../www/local/templates/dev-tpl/footer.php'),
            path.resolve(import.meta.dirname, '../www/local/templates/dev-tpl/header.php'),
            path.resolve(import.meta.dirname, '../www/local/plates/**/*.php'),
            path.resolve(import.meta.dirname, '../www/local/components/**/templates/**/template.php'),
            path.resolve(import.meta.dirname, '../www/local/templates/dev-tpl/components/**/template.php'),
        ]
    }
})