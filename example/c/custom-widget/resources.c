#include <gio/gio.h>

#if defined (__ELF__) && ( __GNUC__ > 2 || (__GNUC__ == 2 && __GNUC_MINOR__ >= 6))
# define SECTION __attribute__ ((section (".gresource.resources"), aligned (8)))
#else
# define SECTION
#endif

#ifdef _MSC_VER
static const SECTION union { const guint8 data[713]; const double alignment; void * const ptr;}  resources_resource_data = { {
  0107, 0126, 0141, 0162, 0151, 0141, 0156, 0164, 0000, 0000, 0000, 0000, 0000, 0000, 0000, 0000, 
  0030, 0000, 0000, 0000, 0254, 0000, 0000, 0000, 0000, 0000, 0000, 0050, 0005, 0000, 0000, 0000, 
  0000, 0000, 0000, 0000, 0001, 0000, 0000, 0000, 0002, 0000, 0000, 0000, 0002, 0000, 0000, 0000, 
  0002, 0000, 0000, 0000, 0324, 0265, 0002, 0000, 0377, 0377, 0377, 0377, 0254, 0000, 0000, 0000, 
  0001, 0000, 0114, 0000, 0260, 0000, 0000, 0000, 0264, 0000, 0000, 0000, 0127, 0314, 0251, 0126, 
  0004, 0000, 0000, 0000, 0264, 0000, 0000, 0000, 0024, 0000, 0166, 0000, 0310, 0000, 0000, 0000, 
  0236, 0002, 0000, 0000, 0367, 0166, 0223, 0153, 0003, 0000, 0000, 0000, 0236, 0002, 0000, 0000, 
  0011, 0000, 0114, 0000, 0250, 0002, 0000, 0000, 0254, 0002, 0000, 0000, 0111, 0366, 0213, 0013, 
  0000, 0000, 0000, 0000, 0254, 0002, 0000, 0000, 0004, 0000, 0114, 0000, 0260, 0002, 0000, 0000, 
  0264, 0002, 0000, 0000, 0262, 0270, 0236, 0150, 0002, 0000, 0000, 0000, 0264, 0002, 0000, 0000, 
  0016, 0000, 0114, 0000, 0304, 0002, 0000, 0000, 0310, 0002, 0000, 0000, 0057, 0000, 0000, 0000, 
  0003, 0000, 0000, 0000, 0107, 0164, 0153, 0114, 0151, 0163, 0164, 0102, 0157, 0170, 0111, 0164, 
  0145, 0155, 0056, 0147, 0154, 0141, 0144, 0145, 0361, 0010, 0000, 0000, 0001, 0000, 0000, 0000, 
  0170, 0332, 0315, 0126, 0115, 0157, 0333, 0060, 0014, 0275, 0347, 0127, 0010, 0274, 0016, 0253, 
  0223, 0145, 0030, 0172, 0160, 0134, 0140, 0207, 0026, 0003, 0172, 0032, 0272, 0263, 0041, 0113, 
  0114, 0302, 0105, 0226, 0074, 0211, 0151, 0323, 0177, 0077, 0305, 0201, 0267, 0174, 0250, 0151, 
  0354, 0026, 0303, 0156, 0264, 0304, 0047, 0362, 0221, 0174, 0262, 0362, 0233, 0115, 0155, 0304, 
  0043, 0372, 0100, 0316, 0316, 0140, 0162, 0065, 0006, 0201, 0126, 0071, 0115, 0166, 0061, 0203, 
  0037, 0017, 0267, 0037, 0257, 0341, 0246, 0030, 0345, 0144, 0031, 0375, 0134, 0052, 0024, 0332, 
  0325, 0222, 0242, 0353, 0202, 0127, 0323, 0061, 0024, 0043, 0041, 0162, 0217, 0277, 0326, 0344, 
  0061, 0010, 0103, 0125, 0273, 0361, 0001, 0376, 0036, 0071, 0275, 0232, 0214, 0041, 0153, 0375, 
  0030, 0353, 0306, 0110, 0106, 0241, 0214, 0014, 0141, 0006, 0167, 0274, 0272, 0247, 0300, 0137, 
  0335, 0346, 0133, 0334, 0002, 0321, 0110, 0217, 0226, 0367, 0327, 0277, 0273, 0247, 0066, 0104, 
  0004, 0067, 0336, 0065, 0350, 0371, 0131, 0130, 0131, 0343, 0014, 0224, 0264, 0345, 0334, 0251, 
  0165, 0200, 0342, 0126, 0232, 0200, 0171, 0326, 0071, 0244, 0375, 0053, 0347, 0065, 0372, 0362, 
  0211, 0064, 0057, 0241, 0230, 0174, 0071, 0361, 0127, 0113, 0062, 0172, 0147, 0307, 0057, 0127, 
  0375, 0104, 0305, 0173, 0211, 0336, 0171, 0322, 0040, 0110, 0107, 0176, 0133, 0253, 0163, 0074, 
  0015, 0364, 0110, 0201, 0052, 0203, 0120, 0074, 0370, 0365, 0111, 0126, 0103, 0230, 0244, 0060, 
  0265, 0364, 0013, 0262, 0045, 0273, 0006, 0212, 0317, 0075, 0000, 0225, 0143, 0166, 0365, 0205, 
  0230, 0045, 0156, 0032, 0151, 0365, 0031, 0046, 0007, 0065, 0113, 0327, 0355, 0136, 0126, 0150, 
  0166, 0205, 0063, 0133, 0263, 0264, 0016, 0366, 0021, 0247, 0141, 0333, 0026, 0225, 0333, 0231, 
  0302, 0300, 0120, 0114, 0077, 0245, 0102, 0017, 0252, 0374, 0320, 0352, 0237, 0051, 0250, 0301, 
  0171, 0314, 0361, 0272, 0047, 0312, 0323, 0142, 0071, 0000, 0326, 0266, 0273, 0057, 0250, 0153, 
  0371, 0013, 0270, 0074, 0333, 0265, 0354, 0140, 0255, 0221, 0152, 0025, 0057, 0200, 0363, 0347, 
  0157, 0251, 0227, 0222, 0131, 0252, 0050, 0250, 0361, 0245, 0131, 0105, 0016, 0257, 0201, 0342, 
  0352, 0161, 0374, 0074, 0073, 0032, 0265, 0113, 0106, 0057, 0336, 0037, 0273, 0301, 0253, 0242, 
  0361, 0037, 0215, 0316, 0253, 0272, 0112, 0023, 0274, 0120, 0137, 0225, 0323, 0317, 0160, 0214, 
  0033, 0310, 0370, 0055, 0254, 0207, 0213, 0346, 0015, 0302, 0031, 0134, 0356, 0264, 0020, 0136, 
  0026, 0103, 0052, 0120, 0027, 0247, 0167, 0131, 0346, 0144, 0114, 0377, 0106, 0064, 0056, 0020, 
  0307, 0137, 0354, 0031, 0361, 0045, 0265, 0224, 0324, 0323, 0273, 0135, 0004, 0223, 0177, 0172, 
  0021, 0034, 0046, 0275, 0267, 0231, 0147, 0335, 0143, 0043, 0076, 0136, 0262, 0077, 0257, 0227, 
  0142, 0364, 0033, 0334, 0313, 0250, 0100, 0000, 0050, 0165, 0165, 0141, 0171, 0051, 0145, 0170, 
  0141, 0155, 0160, 0154, 0145, 0163, 0057, 0000, 0004, 0000, 0000, 0000, 0147, 0164, 0153, 0057, 
  0002, 0000, 0000, 0000, 0143, 0165, 0163, 0164, 0157, 0155, 0055, 0167, 0151, 0144, 0147, 0145, 
  0164, 0057, 0000, 0000, 0001, 0000, 0000, 0000
} };
#else /* _MSC_VER */
static const SECTION union { const guint8 data[713]; const double alignment; void * const ptr;}  resources_resource_data = {
  "\107\126\141\162\151\141\156\164\000\000\000\000\000\000\000\000"
  "\030\000\000\000\254\000\000\000\000\000\000\050\005\000\000\000"
  "\000\000\000\000\001\000\000\000\002\000\000\000\002\000\000\000"
  "\002\000\000\000\324\265\002\000\377\377\377\377\254\000\000\000"
  "\001\000\114\000\260\000\000\000\264\000\000\000\127\314\251\126"
  "\004\000\000\000\264\000\000\000\024\000\166\000\310\000\000\000"
  "\236\002\000\000\367\166\223\153\003\000\000\000\236\002\000\000"
  "\011\000\114\000\250\002\000\000\254\002\000\000\111\366\213\013"
  "\000\000\000\000\254\002\000\000\004\000\114\000\260\002\000\000"
  "\264\002\000\000\262\270\236\150\002\000\000\000\264\002\000\000"
  "\016\000\114\000\304\002\000\000\310\002\000\000\057\000\000\000"
  "\003\000\000\000\107\164\153\114\151\163\164\102\157\170\111\164"
  "\145\155\056\147\154\141\144\145\361\010\000\000\001\000\000\000"
  "\170\332\315\126\115\157\333\060\014\275\347\127\010\274\016\253"
  "\223\145\030\172\160\134\140\207\026\003\172\032\272\263\041\113"
  "\114\302\105\226\074\211\151\323\177\077\305\201\267\174\250\151"
  "\354\026\303\156\264\304\047\362\221\174\262\362\233\115\155\304"
  "\043\372\100\316\316\140\162\065\006\201\126\071\115\166\061\203"
  "\037\017\267\037\257\341\246\030\345\144\031\375\134\052\024\332"
  "\325\222\242\353\202\127\323\061\024\043\041\162\217\277\326\344"
  "\061\010\103\125\273\361\001\376\036\071\275\232\214\041\153\375"
  "\030\353\306\110\106\241\214\014\141\006\167\274\272\247\300\137"
  "\335\346\133\334\002\321\110\217\226\367\327\277\273\247\066\104"
  "\004\067\336\065\350\371\131\130\131\343\014\224\264\345\334\251"
  "\165\200\342\126\232\200\171\326\071\244\375\053\347\065\372\362"
  "\211\064\057\241\230\174\071\361\127\113\062\172\147\307\057\127"
  "\375\104\305\173\211\336\171\322\040\110\107\176\133\253\163\074"
  "\015\364\110\201\052\203\120\074\370\365\111\126\103\230\244\060"
  "\265\364\013\262\045\273\006\212\317\075\000\225\143\166\365\205"
  "\230\045\156\032\151\365\031\046\007\065\113\327\355\136\126\150"
  "\166\205\063\133\263\264\016\366\021\247\141\333\026\225\333\231"
  "\302\300\120\114\077\245\102\017\252\374\320\352\237\051\250\301"
  "\171\314\361\272\047\312\323\142\071\000\326\266\273\057\250\153"
  "\371\013\270\074\333\265\354\140\255\221\152\025\057\200\363\347"
  "\157\251\227\222\131\252\050\250\361\245\131\105\016\257\201\342"
  "\352\161\374\074\073\032\265\113\106\057\336\037\273\301\253\242"
  "\361\037\215\316\253\272\112\023\274\120\137\225\323\317\160\214"
  "\033\310\370\055\254\207\213\346\015\302\031\134\356\264\020\136"
  "\026\103\052\120\027\247\167\131\346\144\114\377\106\064\056\020"
  "\307\137\354\031\361\045\265\224\324\323\273\135\004\223\177\172"
  "\021\034\046\275\267\231\147\335\143\043\076\136\262\077\257\227"
  "\142\364\033\334\313\250\100\000\050\165\165\141\171\051\145\170"
  "\141\155\160\154\145\163\057\000\004\000\000\000\147\164\153\057"
  "\002\000\000\000\143\165\163\164\157\155\055\167\151\144\147\145"
  "\164\057\000\000\001\000\000\000" };
#endif /* !_MSC_VER */

static GStaticResource static_resource = { resources_resource_data.data, sizeof (resources_resource_data.data) - 1 /* nul terminator */, NULL, NULL, NULL };
extern GResource *resources_get_resource (void);
GResource *resources_get_resource (void)
{
  return g_static_resource_get_resource (&static_resource);
}
/*
  If G_HAS_CONSTRUCTORS is true then the compiler support *both* constructors and
  destructors, in a sane way, including e.g. on library unload. If not you're on
  your own.

  Some compilers need #pragma to handle this, which does not work with macros,
  so the way you need to use this is (for constructors):

  #ifdef G_DEFINE_CONSTRUCTOR_NEEDS_PRAGMA
  #pragma G_DEFINE_CONSTRUCTOR_PRAGMA_ARGS(my_constructor)
  #endif
  G_DEFINE_CONSTRUCTOR(my_constructor)
  static void my_constructor(void) {
   ...
  }

*/

#ifndef __GTK_DOC_IGNORE__

#if  __GNUC__ > 2 || (__GNUC__ == 2 && __GNUC_MINOR__ >= 7)

#define G_HAS_CONSTRUCTORS 1

#define G_DEFINE_CONSTRUCTOR(_func) static void __attribute__((constructor)) _func (void);
#define G_DEFINE_DESTRUCTOR(_func) static void __attribute__((destructor)) _func (void);

#elif defined (_MSC_VER) && (_MSC_VER >= 1500)
/* Visual studio 2008 and later has _Pragma */

#include <stdlib.h>

#define G_HAS_CONSTRUCTORS 1

/* We do some weird things to avoid the constructors being optimized
 * away on VS2015 if WholeProgramOptimization is enabled. First we
 * make a reference to the array from the wrapper to make sure its
 * references. Then we use a pragma to make sure the wrapper function
 * symbol is always included at the link stage. Also, the symbols
 * need to be extern (but not dllexport), even though they are not
 * really used from another object file.
 */

/* We need to account for differences between the mangling of symbols
 * for Win32 (x86) and x64 programs, as symbols on Win32 are prefixed
 * with an underscore but symbols on x64 are not.
 */
#ifdef _WIN64
#define G_MSVC_SYMBOL_PREFIX ""
#else
#define G_MSVC_SYMBOL_PREFIX "_"
#endif

#define G_DEFINE_CONSTRUCTOR(_func) G_MSVC_CTOR (_func, G_MSVC_SYMBOL_PREFIX)
#define G_DEFINE_DESTRUCTOR(_func) G_MSVC_DTOR (_func, G_MSVC_SYMBOL_PREFIX)

#define G_MSVC_CTOR(_func,_sym_prefix) \
  static void _func(void); \
  extern int (* _array ## _func)(void);              \
  int _func ## _wrapper(void) { _func(); g_slist_find (NULL,  _array ## _func); return 0; } \
  __pragma(comment(linker,"/include:" _sym_prefix # _func "_wrapper")) \
  __pragma(section(".CRT$XCU",read)) \
  __declspec(allocate(".CRT$XCU")) int (* _array ## _func)(void) = _func ## _wrapper;

#define G_MSVC_DTOR(_func,_sym_prefix) \
  static void _func(void); \
  extern int (* _array ## _func)(void);              \
  int _func ## _constructor(void) { atexit (_func); g_slist_find (NULL,  _array ## _func); return 0; } \
   __pragma(comment(linker,"/include:" _sym_prefix # _func "_constructor")) \
  __pragma(section(".CRT$XCU",read)) \
  __declspec(allocate(".CRT$XCU")) int (* _array ## _func)(void) = _func ## _constructor;

#elif defined (_MSC_VER)

#define G_HAS_CONSTRUCTORS 1

/* Pre Visual studio 2008 must use #pragma section */
#define G_DEFINE_CONSTRUCTOR_NEEDS_PRAGMA 1
#define G_DEFINE_DESTRUCTOR_NEEDS_PRAGMA 1

#define G_DEFINE_CONSTRUCTOR_PRAGMA_ARGS(_func) \
  section(".CRT$XCU",read)
#define G_DEFINE_CONSTRUCTOR(_func) \
  static void _func(void); \
  static int _func ## _wrapper(void) { _func(); return 0; } \
  __declspec(allocate(".CRT$XCU")) static int (*p)(void) = _func ## _wrapper;

#define G_DEFINE_DESTRUCTOR_PRAGMA_ARGS(_func) \
  section(".CRT$XCU",read)
#define G_DEFINE_DESTRUCTOR(_func) \
  static void _func(void); \
  static int _func ## _constructor(void) { atexit (_func); return 0; } \
  __declspec(allocate(".CRT$XCU")) static int (* _array ## _func)(void) = _func ## _constructor;

#elif defined(__SUNPRO_C)

/* This is not tested, but i believe it should work, based on:
 * http://opensource.apple.com/source/OpenSSL098/OpenSSL098-35/src/fips/fips_premain.c
 */

#define G_HAS_CONSTRUCTORS 1

#define G_DEFINE_CONSTRUCTOR_NEEDS_PRAGMA 1
#define G_DEFINE_DESTRUCTOR_NEEDS_PRAGMA 1

#define G_DEFINE_CONSTRUCTOR_PRAGMA_ARGS(_func) \
  init(_func)
#define G_DEFINE_CONSTRUCTOR(_func) \
  static void _func(void);

#define G_DEFINE_DESTRUCTOR_PRAGMA_ARGS(_func) \
  fini(_func)
#define G_DEFINE_DESTRUCTOR(_func) \
  static void _func(void);

#else

/* constructors not supported for this compiler */

#endif

#endif /* __GTK_DOC_IGNORE__ */

#ifdef G_HAS_CONSTRUCTORS

#ifdef G_DEFINE_CONSTRUCTOR_NEEDS_PRAGMA
#pragma G_DEFINE_CONSTRUCTOR_PRAGMA_ARGS(resource_constructor)
#endif
G_DEFINE_CONSTRUCTOR(resource_constructor)
#ifdef G_DEFINE_DESTRUCTOR_NEEDS_PRAGMA
#pragma G_DEFINE_DESTRUCTOR_PRAGMA_ARGS(resource_destructor)
#endif
G_DEFINE_DESTRUCTOR(resource_destructor)

#else
#warning "Constructor not supported on this compiler, linking in resources will not work"
#endif

static void resource_constructor (void)
{
  g_static_resource_init (&static_resource);
}

static void resource_destructor (void)
{
  g_static_resource_fini (&static_resource);
}
